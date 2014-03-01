<?php

namespace Mr\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/labo")
 * Class LaboController
 * @package Mr\SiteBundle\Controller
 */
class LaboController extends Controller
{
    /**
     * @Route("/", name="labo")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
