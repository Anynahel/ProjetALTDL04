<?php

namespace IMIE\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\Security;

class AuthentificationController extends Controller{

    /**
     * @Route("/authentification", name="login")
     */
    public function loginAction(Request $request)
    {
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                Security::AUTHENTICATION_ERROR
            );
        } elseif (null !== $session && $session->has(Security::AUTHENTICATION_ERROR)) {
            $error = $session->get(Security::AUTHENTICATION_ERROR);
            $session->remove(Security::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }


        return $this->render(
            'IMIEBundle:Authentification:login.html.twig',
            array(
                'error'         => $error,
            )
        );
    }
}





///**
// * Created by PhpStorm.
// * User: Projet-Developpement
// * Date: 08/09/2017
// * Time: 14:09
// */
//
//namespace IMIE\Controller;
//
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
//
//
//class AuthentificationController extends Controller{
//
//
//    public function newAction(Request $request)
//    {
//        $category = new Category();
//        $form = $this->createForm('AppBundle\Form\CategoryType', $category);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($category);
//            $em->flush($category);
//
//            return $this->redirectToRoute('admin_category_show', array('id' => $category->getId()));
//        }
//
//        return $this->render('admin/category/new.html.twig', array(
//            'category' => $category,
//            'form' => $form->createView(),
//        ));
//    }
//
//    /**
//     * @Route("/authentification", name="authentification")
//     */
//    public function authAction(Request $request){
//
//
////        $user = new User();
////        $form = $this->createForm(UserType::class, $user);
////        $form->handleRequest($request);
////
////        if ($form->isSubmitted() && $form->isValid()) {
////
////            $email = $request->request->get('_email');
////            $password = $request->request->get('_password');
////
////        }
////
////        var_dump($email);
////        var_dump($password);
//
//        return $this->render('IMIEBundle:Authentification:auth.html.twig');
//    }
//
//
//
//}