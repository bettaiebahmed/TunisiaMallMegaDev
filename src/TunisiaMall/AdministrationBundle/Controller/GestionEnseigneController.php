<?php

namespace TunisiaMall\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\TunisiaMallBundle\Entity\Enseigne;
use TunisiaMall\AdministrationBundle\Form\AjoutEnseigne;
use TunisiaMall\AdministrationBundle\Form\ModifierEnseigne;



class GestionEnseigneController extends Controller
{
    public function AjouterEnseigneAction()
    {
           $enseigne = new Enseigne();
           $user = $this->get('security.context')->getToken()->getUser();
        $userId = $user->getId();
        $form = $this->createForm(new AjoutEnseigne(), $enseigne);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if ($form->isValid()) {
                    $enseigne->setIduser($userId);

            $em = $this->getDoctrine()->getManager();
            $em->persist($enseigne);
            $em->flush();
            return $this->redirect($this->generateUrl('_afficher_enseigne'));
        }
        
        return $this->render('TunisiaMallAdministrationBundle:GestionEnseigne:AjouterEnseigne.html.twig', array('Form' => $form->createView()
                // ...
            ));    }

    public function ModifierEnseigneAction($id)
    {
        $em=$this->getDoctrine()->getManager(); 
        $enseigne=$em->getRepository('TunisiaMallBundle:Enseigne')->findBy(array('id'=>$id));
       
        $form=$this->createForm(new ModifierEnseigne(),$enseigne);
        $request=$this->get('request_stack')->getCurrentRequest();
       

        $form->handleRequest($request);
        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
           $em->getRepository('TunisiaMallBundle:Enseigne')->modify($id,($form['nom']->getData())); 
           return $this->redirect($this->generateUrl('_afficher_enseigne'));
        }
        return $this->render('TunisiaMallAdministrationBundle:GestionEnseigne:ModifierEnseigne.html.twig', array('enseigne'=>$enseigne,'Form'=>$form->createView()
                // ...
            ));    }
            public function deleteAction($id)
    {
        $carteFid=new CarteFidelite();
        $em=$this->getDoctrine()->getManager(); 
        $em->getRepository('TunisiaMallBundle:Enseigne')->supp($id);
return $this->redirect($this->generateUrl('_afficher_enseigne'));

           }

    public function AfficherEnseigneAction()
    {
         $user = $this->get('security.context')->getToken()->getUser();
        $userId = $user->getId();

         $em = $this->getDoctrine()->getManager();
        $enseigne = $em->getRepository('TunisiaMallBundle:Enseigne')->search($userId);
        return $this->render('TunisiaMallAdministrationBundle:GestionEnseigne:AfficherEnseigne.html.twig', array('enseigne'=>$enseigne
                // ...
            ));    }

}
