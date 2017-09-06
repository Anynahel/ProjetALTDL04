<?php

namespace IMIE\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IMIEAdminBundle:Default:index.html.twig');
    }
}
