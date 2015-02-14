<?php

namespace Backend\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/home/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return $this->render('AdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
