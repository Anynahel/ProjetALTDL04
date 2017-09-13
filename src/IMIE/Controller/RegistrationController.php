<?php
/**
 * Created by PhpStorm.
 * User: Projet-Developpement
 * Date: 12/09/2017
 * Time: 15:30
 */
namespace IMIE\Controller;
use IMIE\Entity\User;
use IMIE\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class RegistrationController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        return $this->render(
            'auth/login.html.twig');
    }
    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction(Request $request)
    {
//        var_dump($request);die();
        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
        {
            return $this->redirectToRoute('accueil');
        }
        $authenticationUtils = $this->get('security.authentication_utils');
        return $this->render('auth/login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
    }
    /**
    * @Route("/logout", name="logout")
    */
    public function logoutAction(Request $request)
    {
        throw new \RuntimeException('Déconnexion');
//        return $this->redirectToRoute('accueil');
    }
    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request)
    {
        // Create a new blank user and process the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Encode the new users password
            $encoder = $this->get('security.password_encoder');
            $password = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            // Set their role
            // $user->setIdRole('ROLE_USER');
            // Save
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('login');
        }
        return $this->render('auth/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}