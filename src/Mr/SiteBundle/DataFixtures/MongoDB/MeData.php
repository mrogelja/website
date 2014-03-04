<?php
/**
 * Created by IntelliJ IDEA.
 * User: hypermedia
 * Date: 04/03/14
 * Time: 14:08
 * To change this template use File | Settings | File Templates.
 */

namespace Mr\SiteBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mr\SiteBundle\Document\Me;
use Mr\SiteBundle\Document\Address;

class MeData implements FixtureInterface {
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}