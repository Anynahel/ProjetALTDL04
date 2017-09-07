<?php

namespace IMIE\GuestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

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
     * @Route("/tutoriel/{id}", name="detail_tutoriel", requirements={"id": "\d+"})
     */
    public function tutorielAction(Request $request)
    {
        return $this->render('IMIEGuestBundle:Tutoriels:detail.html.twig',['id'=>$request->get('id')]);
    }
    
    /**
     * @Route("/tutoriels", name="liste_tutoriels")
     */
    public function liste_tutorielsAction()
    {
        return $this->render('IMIEGuestBundle:Tutoriels:index.html.twig');
    }
    
    /**
     * @Route("/formation/{id}", name="detail_formations", requirements={"id": "\d+"})
     */
    public function formationAction(Request $request)
    {   
        return $this->render('IMIEGuestBundle:Products:detail.html.twig',['id'=>$request->get('id')]);
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
    public function indexAction(Request $request)
    {
        
    $form = $this->createFormBuilder()
    ->add('firstname', TextType::class)
    ->add('lastname', TextType::class)
    ->getForm()
     ;
  
    return $this->render('IMIEGuestBundle:Buy:index.html.twig', [
        'id'=>$request->get('id'),
        'formulaire'=>$form->createView()            
    ]);
    }  
    
    /**
     * @Route("/merci", name="merci")
     */
    public function thanksAction()
    {
        return $this->render('IMIEGuestBundle:Buy:thanks.html.twig');
    }
}
