<?php

namespace TunisiaMall\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\AdministrationBundle\Form\Promo;
use TunisiaMall\TunisiaMallBundle\Entity\Promotion;

class GestionPromotionController extends Controller
{
    public function AjouterPromotionAction()
    {
       $promotion = new Promotion();
        $form = $this->createForm(new Promo(), $promotion);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($promotion);
            $em->flush();
            return $this->redirect($this->generateUrl('_consulter_promotion'));
        } 
        return $this->render('TunisiaMallAdministrationBundle:GestionPromotion:AjouterPromotion.html.twig', array('Form' => $form->createView()
                // ...
            ));    }

    public function ConsulterPromotionAction()
    {
          $em = $this->getDoctrine()->getManager();
        $promotion = $em->getRepository('TunisiaMallBundle:Promotion')->findAll();
        return $this->render('TunisiaMallAdministrationBundle:GestionPromotion:ConsulterPromotion.html.twig', array('promotion'=>$promotion
                // ...
            ));    }
             public function ModifierPromotionAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $promotion = $em->getRepository('TunisiaMallBundle:Promotion')->findBy(array('id' => $id));
        $form = $this->createForm(new modifPack(), $promotion);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->getRepository('TunisiaMallBundle:Promotion')->modify($id, ($form['nom']->getData())
                    , ($form['reduction']->getData()), ($form['dateDebut']->getData()), ($form['dateFin']->getData()), ($form['id_produit']->getData()));
            return $this->redirect($this->generateUrl('_consulter_promotion'));
        }
        return $this->render('TunisiaMallAdministrationBundle:PackPublicitaire:ModifierPack.html.twig', array('Form' => $form->createView(),'promo'=>$promo
            ));    }
            public function SupprimerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $em->getRepository('TunisiaMallBundle:Promotion')->supp($id);
        return $this->redirect($this->generateUrl('_consulter_promotion'));    }

}
