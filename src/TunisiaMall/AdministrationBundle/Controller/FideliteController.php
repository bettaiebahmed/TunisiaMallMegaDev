<?php

namespace TunisiaMall\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\TunisiaMallBundle\Entity\CarteFidelite;
use TunisiaMall\AdministrationBundle\Form\AjoutCarteFid;
use TunisiaMall\AdministrationBundle\Form\AttribuerPoint;


class FideliteController extends Controller
{
    public function AjoutCarteAction()
    {
         $carteFid=new CarteFidelite();
        $form=$this->createForm(new AjoutCarteFid(),$carteFid);
        $request=$this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($carteFid);
            $em->flush();
           return $this->redirect($this->generateUrl('tunisia_mall_homepage'));
        }
        
        
        return $this->render('TunisiaMallAdministrationBundle:Fidelite:AjoutCarte.html.twig', array('Form'=>$form->createView()
                // ...
            ));    }

    public function ConsulterModifyAction()
    {
        $em=$this->getDoctrine()->getManager(); 
          $carteFid=$em->getRepository('TunisiaMallBundle:CarteFidelite')->findAll();
        return $this->render('TunisiaMallAdministrationBundle:Fidelite:ConsulterModify.html.twig', array('carteFid'=>$carteFid
                // ...
            ));    }
            
             public function modifyAction($id)
    {
        $em=$this->getDoctrine()->getManager(); 
        $carteFid=$em->getRepository('TunisiaMallBundle:CarteFidelite')->findBy(array('id'=>$id));
       
        $form=$this->createForm(new AttribuerPoint(),$carteFid);
        $request=$this->get('request_stack')->getCurrentRequest();
       

        $form->handleRequest($request);
        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
           $em->getRepository('TunisiaMallBundle:CarteFidelite')->modify($id,($form['nbrePoint']->getData())); 
           return $this->redirect($this->generateUrl('_consulter_modify'));
        }
        return $this->render('TunisiaMallAdministrationBundle:Fidelite:modifyCarte.html.twig',
               array('carteFid'=>$carteFid,'Form'=>$form->createView()));
        }
        public function deleteAction($id)
    {
        $carteFid=new CarteFidelite();
        $em=$this->getDoctrine()->getManager(); 
        $em->getRepository('TunisiaMallBundle:CarteFidelite')->supp($id);
return $this->redirect($this->generateUrl('_consulter_modify'));

           }


}
