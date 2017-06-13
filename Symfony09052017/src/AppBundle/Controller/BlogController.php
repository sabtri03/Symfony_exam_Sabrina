<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlogController extends Controller
{
    /**
     * 
     * @Route("/article/{id}")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        // pour 
        $repository = $em->getRepository('AppBundle:Article');
        
        //$article = $repository->findOneBy(['id' => 1]); // retrouver le premier article
           $article = $repository->findAll();
        
        return $this->render('AppBundle:Blog:index.html.twig', array(
            'article' => $article
        ));
    }

    /**
     * 
     * @Route("/article/add")
     */
    public function detailAction() // pour remplir la BDD à la barbare
    {
        $article = new Article();
        $article->setContent('Lorem ipsum');
        $article->setPublicationDate(new \DateTime() );
        $article->setTitle('Hello wolrd');

        $em = $this->getDoctrine()->getManager();
        $em->persist($article); // sauver les changements dans l'objet PHP
            // mettre à jour les relations par exemple
        $em->flush(); // execute les requetes sql pour comparer, si changement, faire, etc.
        // parfois on n'est pas certain de l'état exacte de la bdd (restcondition)

        return $this->render('App:Blog:detail', array(
            //...
        ));
    }

}
