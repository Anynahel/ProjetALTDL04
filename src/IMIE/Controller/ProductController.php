<?php

namespace IMIE\Controller;

use IMIE\Entity\Product;
use IMIE\Entity\Chapter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Product controller.
 *
 * @Route("product")
 */
class ProductController extends Controller
{
    /**
     * List all product entities.
     *
     * @Route("/", name="product_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('IMIEBundle:Product')->findAll();

        return $this->render('product/index.html.twig', array(
            'products' => $products,
        ));
    }

    /**
     * Creates a new product entity.
     *
     * @Route("/new", name="product_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $product = new Product();
        $form = $this->createFormBuilder($product)
                ->add('image', TextType::class, array(
                    'required' => true,
                    'label' => 'Image'))
                ->add('title', TextType::class, array(
                    'required'=> true,
                    'label' => 'Titre'))
                ->add('summary', TextareaType::class, array(
                    'required'=> true,
                    'label' => 'Sommaire'))
                ->add('keywords', TextType::class, array(
                    'required'=> false,
                    'label' => 'Mots clés'))
                ->add('istutorial', CheckboxType::class, array(
                    'required'=> false,
                    'label' => 'Est-ce un tutoriel ? '))
                ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('product_show', array('idProduct' => $product->getIdproduct()));
        }

        return $this->render('product/new.html.twig', array(
            'product' => $product,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a product entity.
     *
     * @Route("/{idProduct}", name="product_show")
     * @Method("GET")
     */
    public function showAction(Product $product)
    {
        $em = $this->getDoctrine()->getManager();
        $chapters = $em->getRepository('IMIEBundle:Chapter')->findBy(
                array('Product' => $product->getIdProduct()
                )
        );
        $deleteForm = $this->createDeleteForm($product);
//var_dump($chapters);die();
        return $this->render('product/show.html.twig', array(
            'product' => $product,
            'chapters' => $chapters,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing product entity.
     *
     * @Route("/{idProduct}/edit", name="product_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Product $product)
    {
        $deleteForm = $this->createDeleteForm($product);
        $editForm = $this->createFormBuilder($product)
                ->add('image', TextType::class, array(
                    'required'=> true,
                    'label' => 'Image'))
                ->add('title', TextType::class, array(
                    'name' => 'POUET',
                    'required'=> true,
                    'label' => 'Titre'))
                ->add('summary', TextareaType::class, array(
                    'required'=> true,
                    'label' => 'Sommaire'))
                ->add('keywords', TextType::class, array(
                    'required'=> false,
                    'label' => 'Mots clés'))
                ->add('istutorial', CheckboxType::class, array(
                    'required'=> false,
                    'label' => 'Est-ce un tutoriel ?'))
                ->getForm();
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('product_edit', array('idProduct' => $product->getIdproduct()));
        }

        return $this->render('product/edit.html.twig', array(
            'product' => $product,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a product entity.
     *
     * @Route("/{idProduct}", name="product_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Product $product)
    {
        $form = $this->createDeleteForm($product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($product);
            $em->flush();
        }

        return $this->redirectToRoute('product_index');
    }

    /**
     * Creates a form to delete a product entity.
     *
     * @param Product $product The product entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Product $product)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('product_delete', array('idProduct' => $product->getIdproduct())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
