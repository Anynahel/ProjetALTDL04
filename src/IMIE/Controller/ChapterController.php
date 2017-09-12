<?php

namespace IMIE\Controller;

use IMIE\Entity\Chapter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Chapter controller.
 *
 * @Route("chapter")
 */
class ChapterController extends Controller
{
    /**
     * Lists all chapter entities.
     *
     * @Route("/", name="chapter_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chapters = $em->getRepository('IMIEBundle:Chapter')->findAll();

        return $this->render('chapter/index.html.twig', array(
            'chapters' => $chapters,
            ));
    }

    /**
     * Creates a new chapter entity.
     *
     * @Route("/new", name="chapter_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        if(isset($_GET['idProd']) && isset($_GET['ProdName']))
        {
            $chapter = new Chapter();
            $form = $this->createFormBuilder($chapter)
            ->add('chapter_number', IntegerType::class, array(
                'required' => true,
                'label' => 'Numéro de chapitre'))
            ->add('chapter_title', TextType::class, array(
                'required' => true,
                'label' => 'Titre'))
            ->add('content', TextareaType::class, array(
                'required' => true,
                'label' => 'Contenu'))
            ->getForm();
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($chapter);
                $em->flush();

                return $this->redirectToRoute('chapter_show', array('idChapter' => $chapter->getIdchapter()));
            }


            return $this->render('chapter/new.html.twig', array(
                'chapter' => $chapter,
                'idProd' => $_GET['idProd'],
                'ProdName' =>$_GET['ProdName'],
                'form' => $form->createView(),
                ));
        }
        else
        {
            $em = $this->getDoctrine()->getManager();

            $products = $em->getRepository('IMIEBundle:Product')->findAll();

            return $this->render('product/index.html.twig', array(
                'products' => $products,
                ));
        }
    }

    /**
     * Finds and displays a chapter entity.
     *
     * @Route("/{idChapter}", name="chapter_show")
     * @Method("GET")
     */
    public function showAction(Chapter $chapter)
    {
        $deleteForm = $this->createDeleteForm($chapter);

        return $this->render('chapter/show.html.twig', array(
            'chapter' => $chapter,
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Displays a form to edit an existing chapter entity.
     *
     * @Route("/{idChapter}/edit", name="chapter_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Chapter $chapter)
    {
        $deleteForm = $this->createDeleteForm($chapter);
        $editForm = $this->createFormBuilder($chapter)
        ->add('content', TextareaType::class, array(
            'required' => true,
            'label' => 'Contenu'))
        ->add('chapter_title', TextType::class, array(
            'required' => true,
            'label' => 'Titre'))
        ->add('chapter_number', IntegerType::class, array(
            'required' => true,
            'label' => 'Numéro de chapitre'))
        ->getForm();
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chapter_edit', array('idChapter' => $chapter->getIdchapter()));
        }

        return $this->render('chapter/edit.html.twig', array(
            'chapter' => $chapter,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Deletes a chapter entity.
     *
     * @Route("/{idChapter}", name="chapter_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Chapter $chapter)
    {
        $form = $this->createDeleteForm($chapter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($chapter);
            $em->flush();
        }

        return $this->redirectToRoute('chapter_index');
    }

    /**
     * Creates a form to delete a chapter entity.
     *
     * @param Chapter $chapter The chapter entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Chapter $chapter)
    {
        return $this->createFormBuilder()
        ->setAction($this->generateUrl('chapter_delete', array('idChapter' => $chapter->getIdchapter())))
        ->setMethod('DELETE')
        ->getForm()
        ;
    }
}
