<?php

namespace TunisiaMall\TunisiaMallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\AdministrationBundle\Form\Quantite;


class PanierController extends Controller
{
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

}
