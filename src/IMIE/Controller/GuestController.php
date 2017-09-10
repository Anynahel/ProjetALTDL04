<?php

namespace IMIE\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GuestController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function accueilAction()
    {
        return $this->render('IMIEBundle:Default:index.html.twig');
    }
    
    /**
     * @Route("/tutoriel/{id}", name="detail_tutoriel", requirements={"id": "\d+"})
     */
    public function tutorielAction(Request $request)
    {
        return $this->render('IMIEBundle:Tutoriels:detail.html.twig',['id'=>$request->get('id')]);
    }
    
    /**
     * @Route("/tutoriels", name="liste_tutoriels")
     */
    public function liste_tutorielsAction()
    {
        return $this->render('IMIEBundle:Tutoriels:index.html.twig');
    }
    
    /**
     * @Route("/formation/{id}", name="detail_formations", requirements={"id": "\d+"})
     */
    public function formationAction(Request $request)
    {   
        return $this->render('IMIEBundle:Products:detail.html.twig',['id'=>$request->get('id')]);
    }
    
    /**
     * @Route("/formations", name="liste_formation")
     */
    public function liste_formationsAction()
    {
        return $this->render('IMIEBundle:Products:index.html.twig');
    }

    /**
     * @Route("/achat/{id}", name="achat", requirements={"id": "\d+"})
     */
    public function indexAction(Request $request)
    {
        return $this->render('IMIEBundle:Buy:index.html.twig',['id'=>$request->get('id')]);
    }  
    
    /**
     * @Route("/merci", name="merci")
     */
    public function thanksAction()
    {
        return $this->render('IMIEBundle:Buy:thanks.html.twig');
    }
}
