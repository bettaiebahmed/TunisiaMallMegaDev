<?php

namespace TunisiaMall\TunisiaMallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
         if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
         
            
            
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

        }
        
       
        
    if (( $this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')  ))
        { 
            $user = $this->get('security.context')->getToken()->getUser();
        $validite = $user->getValide();
        
          if ($validite=="valide")
          {
              $stat = new Stat();
        $stat->compter();
        return $this->render('TunisiaMallBundle:Default:index.html.twig',array('csrf_token'=>$csrfToken));

          }
          else if ($validite=="refuser")
          {
              echo "impossible";
              die();
          }
        }
        $stat = new Stat();
        $stat->compter();
                return $this->render('TunisiaMallBundle:Default:index.html.twig',array('csrf_token'=>$csrfToken));

    }
    public function contactAction()
    {
         {
        
         if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
       
            
            
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
}
