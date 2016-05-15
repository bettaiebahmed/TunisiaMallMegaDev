<?php
namespace TunisiaMall\AdministrationBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\TunisiaMallBundle\Entity\Publicite;
use TunisiaMall\AdministrationBundle\Form\AjoutPack;
use TunisiaMall\AdministrationBundle\Form\modifPack;
use TunisiaMall\AdministrationBundle\Form\zonePack;
class PackPublicitaireController extends Controller
{
    public function CreerPackAction()
    {
          $publicite = new Publicite();
        $form = $this->createForm(new AjoutPack(), $publicite);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($publicite);
            $em->flush();
            return $this->redirect($this->generateUrl('_afficher_pack'));
        }
        return $this->render('TunisiaMallAdministrationBundle:PackPublicitaire:CreerPack.html.twig', array('Form' => $form->createView()
                // ...
            ));    }
    public function AfficherPackAction()
    {
         
         $em = $this->getDoctrine()->getManager();
        $publicite = $em->getRepository('TunisiaMallBundle:Publicite')->findAll();
        return $this->render('TunisiaMallAdministrationBundle:PackPublicitaire:AfficherPack.html.twig', array('publicite'=>$publicite
                        // ...
        ));
    }
    public function ModifierPackAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $publicite = $em->getRepository('TunisiaMallBundle:Publicite')->findBy(array('id' => $id));
        $form = $this->createForm(new modifPack(), $publicite);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->getRepository('TunisiaMallBundle:Publicite')->modify($id, ($form['nomPub']->getData())
                    , ($form['typePub']->getData()));
            return $this->redirect($this->generateUrl('_afficher_pack'));
        }
        return $this->render('TunisiaMallAdministrationBundle:PackPublicitaire:ModifierPack.html.twig', array('Form' => $form->createView(),'publicite'=>$publicite
            ));    }
    public function SupprimerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $em->getRepository('TunisiaMallBundle:Publicite')->supp($id);
        return $this->redirect($this->generateUrl('_afficher_pack'));    }
    public function DefinirZonePublicitaireAction($id)
    { $em = $this->getDoctrine()->getManager();
        $publicite = $em->getRepository('TunisiaMallBundle:Publicite')->findBy(array('id' => $id));
        $form = $this->createForm(new zonePack(), $publicite);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->getRepository('TunisiaMallBundle:Publicite')->modifyEmplacement($id, ($form['emplacement']->getData())
                    );
            return $this->redirect($this->generateUrl('_afficher_pack'));
        }
        return $this->render('TunisiaMallAdministrationBundle:PackPublicitaire:DefinirZonePublicitaire.html.twig', array('Form' => $form->createView(),'publicite'=>$publicite
            ));    }
}