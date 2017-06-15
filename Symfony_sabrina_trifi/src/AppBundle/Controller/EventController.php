<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Event;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EventController extends Controller
{
    /**
     * @Route("/event", name="event_list")
     */
    public function retrieveAllEvent()
    {
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('AppBundle:Event');
        $event=$repo ->findAll();
        
        return $this->render('templating/event_all.html.twig',
         [
             "event" =>$event
         ]       
        );
         dump($event);
    }
    
    
    /**
     * @Route("/event/{id}", name="event_page")
     */
    public function retrieveAllUser($id=1)
    {
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('AppBundle:Event');
        $event=$repo ->findOneBy(['id'=>$id]);
        
        return $this->render('templating/event_detail.html.twig',
         [
             'event' =>$event,
         ]       
        );
         dump($event);
    }
    
    
}
