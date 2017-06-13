<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LuckyController 
{
    /**
     * @Route("/Lucky_number/{name}",name="Luckynumber", methods={"GET"})
     */
    public function LuckyNumber($name ="World",Request $req)
    {
        //$nmb = mt_rand(1,10);
        $valeur = $req->get('valeur par default');
        //return new response("<h1>".$name.", your Lucky-Number is : ".$nmb."</h1>"); // si il ny a pas de Request
        return new Response("Hello ".$name." ".$valeur);
    }
}
