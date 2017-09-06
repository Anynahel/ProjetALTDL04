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
     * @Route("/tutoriel/{id}", name="detail_tutoriel")
     */
    public function tutorielAction($id)
    {
        return $this->render('IMIEGuestBundle:Tutoriels:detail.html.twig');
    }
    
    /**
     * @Route("/tutoriels", name="liste_tutoriels")
     */
    public function liste_tutorielsAction()
    {
        return $this->render('IMIEGuestBundle:Tutoriels:index.html.twig');
    }
    
    /**
     * @Route("/formation/{id}", name="liste_formations", requirements={"id": "\d+"})
     */
    public function formationAction($id)
    {
        return $this->render('IMIEGuestBundle:Products:detail.html.twig');
    }
    
    /**
     * @Route("/formations", name="detail_formation")
     */
    public function liste_formationsAction()
    {
        return $this->render('IMIEGuestBundle:Products:index.html.twig');
    }
    
}
