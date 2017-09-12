<?php

namespace IMIE\Controller;

use IMIE\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Product controller.
 *
 * @Route("/")
 */
class DefaultController extends Controller
{
    /**
     * List all product entities.
     *
     * @Route("/", name="accueil")
     * @Method("GET")
     */
    public function indexAction()
    {       
        $lastProducts = $this->getDoctrine()->getRepository('IMIEBundle:Product')->findLast(3);

        return $this->render('default/index.html.twig', array(
            'lastProducts' => $lastProducts,
        ));
    }

    /**
     * @Route("/search", name="search_product")
     */
    public function searchProductAction(Request $request) 
    {        
        
        $expression = $request->query->get("expression");
        $products =  $this->getDoctrine()->getRepository("IMIEBundle:Product")->findProduct($expression);
        
        return $this->render('product/index.html.twig', [
                    "products" => $products
        ]); 
    }
}