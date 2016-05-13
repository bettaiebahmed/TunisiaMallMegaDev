<?php

namespace TunisiaMall\TunisiaMallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\TunisiaMallBundle\Entity\Panier;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $session = $this->getRequest()->getSession();
        
         
       
         if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
         
            //tibou
            
         } else {
            // BC for SF < 2.4
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }
        

if( $this->container->get('security.context')->isGranted('ROLE_ADMIN')  ){

return $this->redirect($this->generateUrl('administrateur'));
            
        }
        else if( $this->container->get('security.context')->isGranted('ROLE_RESPONSABLE') && ($validite="valide") )
        {
            return $this->redirect($this->generateUrl('responsable'));
  //ahmed
        }
        
       
        
    if (( $this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')  ))
        { 
            $user = $this->get('security.context')->getToken()->getUser();
        $validite = $user->getValide();
        
          if ($validite=="valide")
          {
              $stat = new Stat();
        $stat->compter();
         $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('TunisiaMallBundle:Produit')->search2();
        return $this->render('TunisiaMallBundle:Default:index.html.twig',array('csrf_token'=>$csrfToken,'product'=>$article));

          }
          else if ($validite=="refuser")
          {
              echo "impossible";
              die();
          }
        }
        $stat = new Stat();
        $stat->compter();
         $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('TunisiaMallBundle:Produit')->search2();
        return $this->render('TunisiaMallBundle:Default:index.html.twig',array('csrf_token'=>$csrfToken,'product'=>$article));

    }
    public function contactAction()
    {
         {
        
         if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
       
            
            
         } 
         else {
            // BC for SF < 2.4
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }
        

if( $this->container->get('security.context')->isGranted('ROLE_ADMIN')  ){

return $this->redirect($this->generateUrl('administrateur'));
            
        }
        else if( $this->container->get('security.context')->isGranted('ROLE_RESPONSABLE') && ($validite="valide") )
        {
            return $this->redirect($this->generateUrl('responsable'));

        }
        
       
        
    if (( $this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')  ))
        { 
            $user = $this->get('security.context')->getToken()->getUser();
        $validite = $user->getValide();
        
        
          if ($validite=="valide")
     
              
              
              {
        return $this->render('TunisiaMallBundle:Default:contact.html.twig',array('csrf_token'=>$csrfToken));
         $stat = new Stat();
        $stat->compter();
          }
          else if ($validite=="refuser")
          {
              echo "impossible";
              die();
          }
        }
 
        return $this->render('TunisiaMallBundle:Default:contact.html.twig',array('csrf_token'=>$csrfToken));

    }
    }
    public function ajouterAction($id)
    {
        $iduser = $this->getUser()->getId();

        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('TunisiaMallBundle:Produit')->findBy(array('id'=>$id));
        $ref=$article[0]->getRef();
        $nom=$article[0]->getnomProduit();
        $prix=$article[0]->getprix();
        $panier= new Panier();
        $panier->setRef($ref);
        $panier->setNom($nom);
        $panier->setPrix($prix);
        $panier->setIduser($iduser);
        $em = $this->getDoctrine()->getManager();

    // tells Doctrine you want to (eventually) save the Product (no queries yet)
    $em->persist($panier);

    // actually executes the queries (i.e. the INSERT query)
    $em->flush();

        return $this->redirect($this->generateUrl('_afficher'));    }
    }
