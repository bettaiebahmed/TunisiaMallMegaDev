<?php

namespace TunisiaMall\TunisiaMallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\AdministrationBundle\Form\Quantite;
use TunisiaMall\AdministrationBundle\Form\Payer;
use TunisiaMall\AdministrationBundle\Form\ccv;

use TunisiaMall\TunisiaMallBundle\Entity\achat;






class PanierController extends Controller
{
     public function CheckoutAction()
    {
         $achat= new achat();
          if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
         
            
            
         } else {
            // BC for SF < 2.4
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }
       
        
        
        $user = $this->get('security.context')->getToken()->getUser();
        $userId = $user->getId();
                $bought="-";

         $em = $this->getDoctrine()->getManager();
        $produclist = $em->getRepository('TunisiaMallBundle:Panier')->search($userId);
          foreach($produclist as $liste_produits)
       {
     $bought=$bought.'-'.$liste_produits['nom'];
          
     }
        $totale="";
        $sum=$em->getRepository('TunisiaMallBundle:Panier')->totale($userId);
     
     echo $bought;
        foreach($sum as $liste_produits)
       {
         $totale=$totale+$liste_produits['totale'];
          
     }
        
        
        
         $achat = new achat();
        $form = $this->createForm(new Payer(), $achat);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $achat->setBought($bought);
            $achat->setIduser($userId);
            $achat->setTotale($totale);
            $em = $this->getDoctrine()->getManager();
            $em->persist($achat);
            
            $em->flush();
            return $this->redirect($this->generateUrl('supprimer_panier_finale'));
        }
         $achat = new achat();
        $form2 = $this->createForm(new ccv(), $achat);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form2->handleRequest($request);
        if ($form2->isValid()) {
            $achat->setBought($bought);
            $achat->setIduser($userId);
            $achat->setTotale($totale);
            $em = $this->getDoctrine()->getManager();
            $em->persist($achat);
            
            $em->flush();
            return $this->redirect($this->generateUrl('supprimer_panier_finale'));
        }
        return $this->render('TunisiaMallBundle:Panier:Checkout.html.twig', array('csrf_token'=>$csrfToken,'form2'=>$form2->createView(),'totale'=>$totale,'form'=>$form->createView()));
    }
     
    public function AfficherAction()
    {
          if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
         
            
            
         } else {
            // BC for SF < 2.4
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }
        
        
        $user = $this->get('security.context')->getToken()->getUser();
        $userId = $user->getId();
         $em = $this->getDoctrine()->getManager();
        $panier_produit = $em->getRepository('TunisiaMallBundle:Panier')->search($userId);
        
        
        
        return $this->render('TunisiaMallBundle:Panier:Afficher.html.twig', array('csrf_token'=>$csrfToken,'panier2'=>$panier_produit
                // ...
            ));    }
            public function supprimerAction($id)
    {
         $em = $this->getDoctrine()->getManager();
        $em->getRepository('TunisiaMallBundle:Panier')->supp($id);
        return $this->redirect($this->generateUrl('_afficher'));    }
        
        
        
          public function supprimerfinaleAction()
    {
              $user = $this->get('security.context')->getToken()->getUser();
        $userId = $user->getId();
         $em = $this->getDoctrine()->getManager();
        $em->getRepository('TunisiaMallBundle:Panier')->suppFinale($userId);
        return $this->redirect($this->generateUrl('tunisia_mall_homepage'));   
        
        
    }

}
