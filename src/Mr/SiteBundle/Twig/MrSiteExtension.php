<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mathieu
 * Date: 08/02/14
 * Time: 12:56
 * To change this template use File | Settings | File Templates.
 */

namespace Mr\SiteBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;

class MrSiteExtension extends \Twig_Extension
{
    protected $container;


    public function setContainer(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('get_weather', array($this, 'getWeather'))
        );
    }

    public function getWeather($where)
    {
        //For codes, see http://bugs.openweathermap.org/projects/api/wiki/Weather_Condition_Codes
        try {
            $weatherInfos = $this->container->get('endroid.openweathermap')->getWeather($where);
            $weather = $weatherInfos->weather[0];
            return $weather;
        } catch (\Exception $e) {

        }

    }

    public function getName()
    {
        return 'mrsite_extension';
    }
}