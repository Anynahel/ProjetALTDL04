<?php
/**
 * Created by PhpStorm.
 * User: Projet-Developpement
 * Date: 06/09/2017
 * Time: 16:26
 */

namespace IMIE\AdminBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthController extends Controller{

    public function indexAction(){

            return $this->render('IMIEAdminBundle:Admin:login.html.twig');

    }
}