<?php
/**
 * Created by PhpStorm.
 * User: Projet-Developpement
 * Date: 07/09/2017
 * Time: 09:42
 */

namespace IMIE\AdminBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller{

    public function productsListAction(){

        return $this->render('IMIEAdminBundle:Admin:liste-produits.html.twig');

    }

    public function createProductsAction(){

        return $this->render('IMIEAdminBundle:Admin:creer-produits.html.twig');

    }

    public function modifyProductsAction(){

        return $this->render('IMIEAdminBundle:Admin:modifier-produit.html.twig');
    }

    public function contentListAction(){

        return $this->render('IMIEAdminBundle:Admin:liste-contenu.html.twig');
    }

    public function createContentAction(){

        return $this->render('IMIEAdminBundle:Admin:creer-contenu.html.twig');
    }

    public function modifyContentAction(){

        return $this->render('IMIEAdminBundle:Admin:modifier-contenu.html.twig');
    }
}