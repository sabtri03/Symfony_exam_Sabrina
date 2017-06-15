<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categories;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoriesController extends Controller
{
    /**
     * @Route("/categories", name="cat_list")
     */
    public function retrieveAllCategories()
    {
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('AppBundle:Categories');
        $categories=$repo ->findAll();
        
        return $this->render('templating/cat_detail.html.twig',
         [
             'categories' =>$categories
         ]       
        );
        dump($categories);
    }
    
    
}
