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
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Product controller.
 *
 * @Route("product")
 */
class ProductController extends Controller {

    /**
     * List all product entities.
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/", name="product_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('IMIEBundle:Product')->findAll();

        return $this->render('product/index.html.twig', array(
                    'products' => $products,
        ));
    }

    /**
     * Creates a new product entity.
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/new", name="product_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $product = new Product();
        $form = $this->createFormBuilder($product)
                ->add('image', FileType::class, array(
                    'attr' => array('accept' => 'image/jpeg,image/png'),
                    'required' => true,
                    'label' => 'Image de présentation (jpg, png)'))
                ->add('title', TextType::class, array(
                    'required' => true,
                    'label' => 'Titre'))
                ->add('summary', TextareaType::class, array(
                    'required' => true,
                    'label' => 'Sommaire'))
                ->add('keywords', TextType::class, array(
                    'required' => false,
                    'label' => 'Mots clés (séparés par une virgule)'))
                ->add('istutorial', CheckboxType::class, array(
                    'required' => false,
                    'label' => 'Est-ce un tutoriel ? '))
                ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /* @var $file \Symfony\Component\HttpFoundation\File\UploadedFile */
            $file = $product->getImage();
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
            $directory = $this->getParameter('upload_dir');
            $file->move($directory, $fileName);
            $product->setImage($fileName);

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
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/{idProduct}", name="product_show")
     * @Method("GET")
     */
    public function showAction(Product $product) {
        $em = $this->getDoctrine()->getManager();
        $chapters = $em->getRepository('IMIEBundle:Chapter')->findBy(
                array('Product' => $product->getIdProduct()
                )
        );
        $deleteForm = $this->createDeleteForm($product);

        return $this->render('product/show.html.twig', array(
                    'product' => $product,
                    'chapters' => $chapters,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing product entity.
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/{idProduct}/edit", name="product_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Product $product) {
        $deleteForm = $this->createDeleteForm($product);
        $editForm = $this->createFormBuilder($product)
                ->add('image', TextType::class, array(
                    'required' => true,
                    'label' => 'Image de présentation (jpg, png)'))
                ->add('image_update', FileType::class, array(
                    'attr' => array('accept' => 'image/jpeg,image/png'),
                    'required' => false,
                    'label' => 'Changer d\'image de présentation (jpg, png)',
                    'mapped' => false))
                ->add('title', TextType::class, array(
                    'required' => true,
                    'label' => 'Titre'))
                ->add('summary', TextareaType::class, array(
                    'required' => true,
                    'label' => 'Sommaire'))
                ->add('keywords', TextType::class, array(
                    'required' => false,
                    'label' => 'Mots clés (séparés par une virgule)'))
                ->add('istutorial', CheckboxType::class, array(
                    'required' => false,
                    'label' => 'Est-ce un tutoriel ?'))
                ->getForm();
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $file = $editForm['image_update']->getData();

            if (!is_null($file)) {
                $ext = strtolower($file->guessExtension());
                if (in_array($ext, ['jpg', 'jpeg', 'png'])) {
                    /* @var $file \Symfony\Component\HttpFoundation\File\UploadedFile */
                    $fileName = md5(uniqid()) . '.' . $ext;
                    $directory = $this->getParameter('upload_dir');
                    $file->move($directory, $fileName);
                    dump($product->getImage());
                    $product->setImage($fileName);
                }
            }

            $this->getDoctrine()->getManager()->flush();
            dump($product->getImage());

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
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/{idProduct}", name="product_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Product $product) {
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
    private function createDeleteForm(Product $product) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('product_delete', array('idProduct' => $product->getIdproduct())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
