<?php

namespace IMIE\Controller;

use IMIE\Entity\User;
use IMIE\Entity\Role;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * User controller.
 *
 * @Route("user")
 */
class UserController extends Controller
{
    /**
     * Lists all user entities.
     * @Security("has_role('ROLE_ADMIN')")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('IMIEBundle:User')->findAll();

        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Creates a new user entity.
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/new", name="user_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createFormBuilder($user)
                ->add('firstname', TextType::class, array(
                    'required' =>true,
                    'label' => 'Prénom'))
                ->add('lastname', TextType::class, array(
                    'required' =>true,
                    'label' => 'Nom de famille'))
                ->add('address', TextType::class, array(
                    'required' =>true,
                    'label' => 'Adresse'))
                ->add('additional_address', TextType::class, array(
                    'required' =>false,
                    'label' => 'Complément d\'adresse'))
                ->add('zip_code', TextType::class, array(
                    'required' =>true,
                    'label' => 'Code Postal'))
                ->add('city', TextType::class, array(
                    'required' =>true,
                    'label' => 'Ville'))
                ->add('country', TextType::class, array(
                    'required' =>true,
                    'label' => 'Pays'))
                ->add('email', EmailType::class, array(
                    'required' =>true,
                    'label' => 'Email'))
                ->add('password', PasswordType::class, array(
                    'required' =>true,
                    'label' => 'Mot de passe'))
                ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $role = new Role();   
            // TODO
            // $user->setIdRole($role->findOneByName(2));
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_show', array('idUser' => $user->getIduser()));
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a user entity.
     * @Security("has_role('ROLE_USER')")
     * @Route("/{idUser}", name="user_show")
     * @Method("GET")
     */
    public function showAction(User $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing user entity.
     * @Security("has_role('ROLE_USER')")
     * @Route("/{idUser}/edit", name="user_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createFormBuilder($user)
                ->add('firstname', TextType::class, array(
                    'required' =>true,
                    'label' => 'Prénom'))
                ->add('lastname', TextType::class, array(
                    'required' =>true,
                    'label' => 'Nom de famille'))
                ->add('address', TextType::class, array(
                    'required' =>true,
                    'label' => 'Adresse'))
                ->add('additional_address', TextType::class, array(
                    'required' =>false,
                    'label' => 'Complément d\'adresse'))
                ->add('zip_code', TextType::class, array(
                    'required' =>true,
                    'label' => 'Code Postal'))
                ->add('city', TextType::class, array(
                    'required' =>true,
                    'label' => 'Ville'))
                ->add('country', TextType::class, array(
                    'required' =>true,
                    'label' => 'Pays'))
                ->add('email', EmailType::class, array(
                    'required' =>true,
                    'label' => 'Email'))
                ->add('password', PasswordType::class, array(
                    'required' =>true,
                    'label' => 'Mot de passe'))
                ->getForm();
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_edit', array('idUser' => $user->getIduser()));
        }

        return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a user entity.
     * @Security("has_role('ROLE_USER')")
     * @Route("/{idUser}", name="user_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $dateToday = date("dd/MM/YYYY");
            $user->setDeactivationDate($dateToday);
            var_dump($dateToday);die();

            // $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('accueil');
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('idUser' => $user->getIduser())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
