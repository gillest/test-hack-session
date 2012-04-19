<?php

namespace Gilles\Bundle\SearchBundle\Controller;

use FOQ\ElasticaBundle\Finder\TransformedFinder;

use FOQ\ElasticaBundle\Client;

use Symfony\Component\HttpFoundation\Session;

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
        /** var Elastica_Type */
        $userType = $this->container->get('foq_elastica.finder.my_twitter_river');
        
        /** var Elastica_ResultSet */
        $resultSet = $userType->find('bob');
        
        return array('name' => $name);
    }
}
