<?php

namespace TunisiaMall\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\TunisiaMallBundle\Entity\Produit;
use TunisiaMall\AdministrationBundle\Form\ajoutArticle;
use TunisiaMall\AdministrationBundle\Form\modifArticle;
use TunisiaMall\AdministrationBundle\Form\Recherche;

class ProduitController extends Controller
{
    public function ajouterProduitAction()
    {
          $article = new Produit();
        $form = $this->createForm(new ajoutArticle(), $article);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();
            return $this->redirect($this->generateUrl('_afficher_produit'));
        }
        return $this->render('TunisiaMallAdministrationBundle:Produit:ajouterProduit.html.twig', array('Form' => $form->createView()
                // ...
            ));    }

    public function AfficherProduitAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $userId = $user->getId();

         $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('TunisiaMallBundle:Produit')->search($userId);
        return $this->render('TunisiaMallAdministrationBundle:Produit:AfficherProduit.html.twig', array('article' => $article
                        // ...
        ));
           }

    public function ModifierArticleAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('TunisiaMallBundle:Produit')->findBy(array('id' => $id));

        $form = $this->createForm(new modifArticle(), $article);
        $request = $this->get('request_stack')->getCurrentRequest();


        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->getRepository('TunisiaMallBundle:Produit')->modify($id, ($form['nomProduit']->getData())
                    , ($form['Description']->getData()), ($form['typeProduit']->getData()), ($form['quantiteStock']->getData()), ($form['prix']->getData()));
            return $this->redirect($this->generateUrl('_afficher_produit'));
        }
        return $this->render('TunisiaMallAdministrationBundle:Produit:ModifierArticle.html.twig', array('article' => $article, 'Form' => $form->createView()
                        // ...
        ));    }

    public function SupprimerArticleAction($id)
    {
         $em = $this->getDoctrine()->getManager();
        $em->getRepository('TunisiaMallBundle:Produit')->supp($id);
        return $this->redirect($this->generateUrl('_afficher_produit'));    }

    public function RechercheArticleAction()
    {
        $form = $this->createForm(new Recherche());

        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);

        return $this->render('TunisiaMallAdministrationBundle:Produit:RechercheArticle.html.twig', array('Form' => $form->createView()
        ));    }

    public function resultatAction()
    {
         $em = $this->getDoctrine()->getManager();
        $article = new Produit();
        $form = $this->createForm(new Recherche());
        $form->bind($this->get('request'));
        if ($form->isValid()) {


            $article = $em->getRepository('TunisiaMallBundle:Produit')->search_nom_article($form['nomProduit']->getData());
            return $this->render('TunisiaMallAdministrationBundle:Produit:Resultat.html.twig', array('article' => $article));
        }   }

}
