<?php








class PubliciteController extends Controller {

    
  public function  indexAction()
  {
      
       $em = $this->getDoctrine()->getManager();

        $actualites = $em->getRepository('AdministrationBundle:Actualite')->findAll();

        return $this->render('actualite/index.html.twig', array(
            'actualites' => $actualites,
        ));
      
      
      
      
  }
    
    
    
    
    
}
