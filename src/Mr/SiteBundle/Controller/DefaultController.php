<?php

namespace Mr\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="profile")
     * @Template()
     */
    public function indexAction()
    {
        $me = $this->get('doctrine_mongodb')
            ->getRepository('MrSiteBundle:Me')
            ->findAll();

        $skills = $this->get('doctrine_mongodb')
            ->getManager()
            ->createQueryBuilder('MrSiteBundle:Me')
            ->map(<<<'FN'
function(){
    for(var i in this.skills){
        emit({
            type: this.skills[i].type}, {
                name: this.skills[i].name,
                rating: this.skills[i].rating,
                icon: this.skills[i].icon
        });
    }
}
FN
            )
            ->reduce(<<<'FN'
function(k, vals){
    return { skills: vals };
}
FN
            )
            ->sort("this.type", -1)
            ->getQuery()
            ->execute();

        return array(
            'me' => $me[0],
            'skills' => $skills
        );
    }
}
