<?php

namespace Frontend\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller {

    /**
     * @Route("/index")
     * @Template()
     */
    public function indexAction() {
        return array(
                // ...
        );
    }

}
