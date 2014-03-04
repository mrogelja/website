<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mathieu
 * Date: 01/03/14
 * Time: 15:27
 * To change this template use File | Settings | File Templates.
 */

namespace Mr\SiteBundle\Controller;

use Mr\SiteBundle\MrSiteBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/blog")
 * Class BlogController
 * @package Mr\SiteBundle\Controller
 */
class BlogController extends Controller
{
    /**
     * @Route("/", name="blog")
     * @Template()
     */
    public function indexAction()
    {
        $posts = $this->get('doctrine_mongodb')
            ->getRepository('MrSiteBundle:Post')
            ->findBySection("blog");

        return array(
            "posts" => $posts
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
}