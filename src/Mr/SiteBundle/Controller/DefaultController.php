<?php

namespace Mr\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        $me = $this->get('doctrine_mongodb')
            ->getRepository('MrSiteBundle:Me')
            ->findAll();

        return array(
            'me' => $me[0],
        );
    }
}
