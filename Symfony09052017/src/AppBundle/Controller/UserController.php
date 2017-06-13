<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController  extends Controller
{
    /**
     * @Route("/User/{name}",name="User", methods={"GET"})
     */
    public function User($name='world' )
    {
        return $this -> render('templating/demo.html.twig',[
            'name'=> $name
        ]);
    }

}
