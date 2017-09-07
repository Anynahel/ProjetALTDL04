<?php

namespace IMIE\GuestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\httpFoundation\Request;

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
     * @Route("/formation/{param}", name="detail_formations", requirements={"param": "\d+"})
     */
    public function formationAction()
    {   
        return $this->render('IMIEGuestBundle:Products:detail.html.twig');
    }
    
    /**
     * @Route("/formations", name="liste_formation")
     */
    public function liste_formationsAction()
    {
        return $this->render('IMIEGuestBundle:Products:index.html.twig');
    }

    /**
     * @Route("/achat/{id}", name="achat", requirements={"id": "\d+"})
     */
    public function indexAction($id)
    {
        return $this->render('IMIEGuestBundle:Buy:index.html.twig');
    }  
    
    /**
     * @Route("/merci", name="merci")
     */
    public function thanksAction()
    {
        return $this->render('IMIEGuestBundle:Buy:thanks.html.twig');
    }
}
