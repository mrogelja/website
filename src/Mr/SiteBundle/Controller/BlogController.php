<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mathieu
 * Date: 01/03/14
 * Time: 15:27
 * To change this template use File | Settings | File Templates.
 */

namespace Mr\SiteBundle\Controller;

use Mr\SiteBundle\Document\Post;
use Mr\SiteBundle\Document\Upload;
use Mr\SiteBundle\MrSiteBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/blog")
 * Class BlogController
 * @package Mr\SiteBundle\Controller
 */
class BlogController extends Controller
{
    /**
     * @Route("/", name="blog")
     * @Template("MrSiteBundle:Blog:index.ko.html.twig")
     */
    public function indexAction()
    {
        $posts = $this->get('doctrine_mongodb')
            ->getManager()
            ->createQueryBuilder('MrSiteBundle:Post')
            ->field('section')->equals('blog')
            ->sort('lastModificationAt', 'DESC')
            ->getQuery()
            ->execute()
            ->toArray();

        return array(
            "posts" => array_values($posts)
        );
    }

    /**
     * @Route("/post/{id}/{slug}", name="blog_post")
     * @Template()
     */
    public function postAction($id, $slug)
    {
        $post = $this->get('doctrine_mongodb')
            ->getRepository('MrSiteBundle:Post')
            ->find($id);

        return array(
            "post" => $post
        );
    }

    /**
     * @Route("/secure/post/action/new", name="blog_post_new")
     */
    public function newPost()
    {

        $dm = $this->get('doctrine_mongodb')->getManager();

        $post = new Post();
        $post->setSection("blog");
        $post->setTitle("[Nouvel article]");
        $post->setSummary("[Vide]");
        $post->isDraft(true);

        $thumb = $this->get('doctrine_mongodb')
            ->getRepository('MrSiteBundle:Upload')
            ->findOneByFilename("dummyThumb");

        if (!$thumb) {
            $file  = new File(__DIR__.'/../Resources/public/img/dummy.jpg');
            $thumb = new Upload();
            $thumb->setFile($file->getPathname());
            $thumb->setFilename('dummyThumb');
            $thumb->setMimeType($file->getMimeType());
            $dm->persist($thumb);
            $dm->flush();
        }

        $post->setImage($thumb);

        $dm->persist($post);
        $dm->flush();

        return new Response($this->get('jms_serializer')->serialize($post, 'json'));
    }
}