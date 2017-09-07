<?php

namespace IMIE\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CustomerController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('IMIEBundle:Default:index.html.twig');
    }
}
