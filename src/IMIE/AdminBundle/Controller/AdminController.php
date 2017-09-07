<?php
/**
 * Created by PhpStorm.
 * User: Projet-Developpement
 * Date: 07/09/2017
 * Time: 09:42
 */

namespace IMIE\AdminBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller{

    /**
     * @Route("/acces_liste_produits_crees", name="acces_liste_produits_crees")
     */
    public function productsListAction(){

        return $this->render('IMIEAdminBundle:Admin:liste-produits.html.twig');

    }

    /**
     * @Route("/acces_liste_produits_crees/creer_produit", name="creer_produit")
     */
    public function createProductsAction(){

        return $this->render('IMIEAdminBundle:Admin:creer-produits.html.twig');

    }

    /**
     * @Route("/acces_liste_produits_crees/modifier_produit", name="modifier_produit")
     */
    public function modifyProductsAction(){

        return $this->render('IMIEAdminBundle:Admin:modifier-produit.html.twig');
    }

    /**
     * @Route("/acces_liste_contenu_crees", name="acces_liste_contenu_crees")
     */
    public function contentListAction(){

        return $this->render('IMIEAdminBundle:Admin:liste-contenu.html.twig');
    }

    /**
     * @Route("/acces_liste_contenu_crees/creer_contenu", name="creer_contenu")
     */
    public function createContentAction(){

        return $this->render('IMIEAdminBundle:Admin:creer-contenu.html.twig');
    }

    /**
     * @Route("/acces_liste_contenu_crees/modifier_contenu", name="modifier_contenu")
     */
    public function modifyContentAction(){

        return $this->render('IMIEAdminBundle:Admin:modifier-contenu.html.twig');
    }
}