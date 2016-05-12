<?php

namespace TunisiaMall\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PackPublicitaireController extends Controller
{
    public function CreerPackAction()
    {
        return $this->render('TunisiaMallAdministrationBundle:PackPublicitaire:CreerPack.html.twig', array(
                // ...
            ));    }

    public function ModifierPackAction()
    {
        return $this->render('TunisiaMallAdministrationBundle:PackPublicitaire:ModifierPack.html.twig', array(
                // ...
            ));    }

    public function SupprimerAction()
    {
        return $this->render('TunisiaMallAdministrationBundle:PackPublicitaire:Supprimer.html.twig', array(
                // ...
            ));    }

    public function DefinirZonePublicitaireAction()
    {
        return $this->render('TunisiaMallAdministrationBundle:PackPublicitaire:DefinirZonePublicitaire.html.twig', array(
                // ...
            ));    }

}
