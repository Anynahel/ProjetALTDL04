<?php

namespace IMIE\Controller;

use IMIE\Entity\Productorder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Productorder controller.
 *
 * @Route("productorder")
 */
class ProductorderController extends Controller
{
    /**
     * Lists all productorder entities.
     *
     * @Route("/", name="productorder_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $productorders = $em->getRepository('IMIEBundle:Productorder')->findAll();

        return $this->render('productorder/index.html.twig', array(
            'productorders' => $productorders,
        ));
    }

    /**
     * Creates a new productorder entity.
     *
     * @Route("/new", name="productorder_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $productorder = new Productorder();
        $form = $this->createForm('IMIE\Form\ProductorderType', $productorder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($productorder);
            $em->flush();

            return $this->redirectToRoute('productorder_show', array('idOrder' => $productorder->getIdorder()));
        }

        return $this->render('productorder/new.html.twig', array(
            'productorder' => $productorder,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a productorder entity.
     *
     * @Route("/{idOrder}", name="productorder_show")
     * @Method("GET")
     */
    public function showAction(Productorder $productorder)
    {
        $deleteForm = $this->createDeleteForm($productorder);

        return $this->render('productorder/show.html.twig', array(
            'productorder' => $productorder,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing productorder entity.
     *
     * @Route("/{idOrder}/edit", name="productorder_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Productorder $productorder)
    {
        $deleteForm = $this->createDeleteForm($productorder);
        $editForm = $this->createForm('IMIE\Form\ProductorderType', $productorder);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('productorder_edit', array('idOrder' => $productorder->getIdorder()));
        }

        return $this->render('productorder/edit.html.twig', array(
            'productorder' => $productorder,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a productorder entity.
     *
     * @Route("/{idOrder}", name="productorder_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Productorder $productorder)
    {
        $form = $this->createDeleteForm($productorder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($productorder);
            $em->flush();
        }

        return $this->redirectToRoute('productorder_index');
    }

    /**
     * Creates a form to delete a productorder entity.
     *
     * @param Productorder $productorder The productorder entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Productorder $productorder)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('productorder_delete', array('idOrder' => $productorder->getIdorder())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
