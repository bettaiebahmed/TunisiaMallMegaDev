<?php

namespace TunisiaMall\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CarteFideliteController extends Controller
{
    /**
     * @Route("/AjoutCarte")
     * @Template()
     */
    public function AjoutCarteAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/ModifierCarte")
     * @Template()
     */
    public function ModifierCarteAction()
    {
        return array(
                // ...
            );    }

}
