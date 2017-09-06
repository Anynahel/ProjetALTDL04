<?php

namespace IMIE\GuestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function accueilAction()
    {
        return $this->render('IMIEGuestBundle:Default:index.html.twig');
    }
    
    /**
     * @Route("/tutoriels", name="liste_tutoriels")
     */
    public function liste_tutorielsAction()
    {
        return $this->render('IMIEGuestBundle:Tutoriels:index.html.twig');
    }
    
    
}
