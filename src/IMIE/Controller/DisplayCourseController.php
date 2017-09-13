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
     * @Route("/{idProduct}", name="display_course")
     * @Method("GET")
     */
    public function indexAction(Product $product)
    {       
        $em = $this->getDoctrine()->getManager();
        $chapters = $em->getRepository('IMIEBundle:Chapter')->findBy(
                array('Product' => $product->getIdProduct()
                )
        );

        return $this->render('course/displayCourse.html.twig', array(
            'product' => $product,
            'chapters' => $chapters,
        ));
    }

}