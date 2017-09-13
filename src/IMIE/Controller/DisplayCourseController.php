<?php

namespace IMIE\Controller;

use IMIE\Entity\Product;
use IMIe\Entity\Chapter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


/**
 * Course controller.
 *
 * @Route("course")
 */
class DisplayCourseController extends Controller
{

    /**
     * List all product entities.
     *
     * @Route("/", name="display_courses")
     * @Method("GET")
     */
    public function indexAction()
    {       
               $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('IMIEBundle:Product')->findAll();

        return $this->render('course/displayCourse.html.twig', array(
                    'products' => $products,
                    'isCoursesList' => true,
        ));
    }



    /**
     * List all product entities.
     *
     * @Route("/{idProduct}", name="display_course")
     * @Method("GET")
     */
    public function showAction(Product $products)
    {       
        $em = $this->getDoctrine()->getManager();
        $chapters = $em->getRepository('IMIEBundle:Chapter')->findBy(
                array('Product' => $products->getIdProduct()
                )
        );

        return $this->render('course/displayCourse.html.twig', array(
            'products' => $products,
            'chapters' => $chapters,
            'isCoursesList' => false,
        ));
    }

}
