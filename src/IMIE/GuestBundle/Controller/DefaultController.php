<?php

namespace IMIE\GuestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IMIEGuestBundle:Default:index.html.twig');
    }
}
