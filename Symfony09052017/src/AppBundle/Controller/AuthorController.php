<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class AuthorController extends Controller
{
    /**
     * 
     * @Route("/author/{id}")
     */
    public function retrieveAuthor($id=1)
    {
        $em=$this->getDoctrine()->getManager();
        $repo = $em->getRepository('AppBundle:Author');
        $author = $repo ->findOneBy(['id'=>$id]);
        
        return $this->render('templating/user_detail.html.twig',
         [
             'author' =>$author,
         ]       
        );
    }
    
    /**
     * 
     * @Route("/author/all")
     */
    public function retrieveAllAuthor()
    {
        $em=$this->getDoctrine()->getManager();
        $repo = $em->getRepository('AppBundle:Author');
        $author = $repo ->findAll();
        
        return $this->render('templating/user_detail.html.twig',
         array(
             'author' =>$author,
         ));
    }
}