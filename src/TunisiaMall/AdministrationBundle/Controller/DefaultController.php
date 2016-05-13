<?php

namespace TunisiaMall\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\TunisiaMallBundle\Entity\Statistique;


class DefaultController extends Controller
{
    public function adminAction()
    {
        return $this->render('TunisiaMallAdministrationBundle::administrateur.html.twig');
    }
     public function responsableAction()
    {
        return $this->render('TunisiaMallAdministrationBundle::responsable.html.twig');
    }
     public function administrateurAction()
    {
         $statistique=new Statistique();
       $em=$this->getDoctrine()->getManager(); 
       $statistique=$em->getRepository('TunisiaMallBundle:Statistique')->findAll();
        $em=$this->getDoctrine()->getManager(); 
       $usernumber=$em->getRepository('TunisiaMallBundle:User')->getUserNumber()-1;
       $this->get('knp_snappy.pdf')->generateFromHtml(
    $this->renderView(
        'TunisiaMallAdministrationBundle::administrateur.html.twig',
        array(
            'some'  => $vars
        )
    ),
    'C:\wamp\www\TunisiaMallMegaDev\web\uploads\new.pdf'
);
        
        return $this->render('TunisiaMallAdministrationBundle::administrateur.html.twig', array('statistique'=>$statistique,'usernumber'=>$usernumber));
    }
}
