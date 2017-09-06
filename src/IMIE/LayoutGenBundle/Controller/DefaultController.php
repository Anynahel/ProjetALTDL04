<?php

namespace IMIE\LayoutGenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IMIELayoutGenBundle:Default:index.html.twig');
    }
}
