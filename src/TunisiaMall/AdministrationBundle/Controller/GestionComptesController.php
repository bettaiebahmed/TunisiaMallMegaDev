<?php

namespace TunisiaMall\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\TunisiaMallBundle\Entity\User;


class GestionComptesController extends Controller
{
    public function ValiderResponsableAction()
    {
        
        return $this->render('TunisiaMallAdministrationBundle:GestionComptes:ValiderResponsable.html.twig', array(
                // ...
            ));    }

    public function ValiderClientAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery(
                'SELECT u FROM TunisiaMallBundle:User u WHERE u.roles LIKE :role'
            )->setParameter('role', '%"ROLE_CLIENT"%');

$user = $query->getResult();
        return $this->render('TunisiaMallAdministrationBundle:GestionComptes:ValiderClient.html.twig', array('user' => $user
              
            ));    }

    public function SupprimerCompteAction()
    {
        return $this->render('TunisiaMallAdministrationBundle:GestionComptes:SupprimerCompte.html.twig', array(
                // ...
            ));    }
       public function valider_clientAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('TunisiaMallBundle:User')->valider_client($id);
         return $this->redirect($this->generateUrl('_valider_client'));
       
              }
             public function refuser_clientAction($id)
           {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('TunisiaMallBundle:User')->refuser_client($id);
         return $this->redirect($this->generateUrl('_valider_client'));
       
                }

   

}
