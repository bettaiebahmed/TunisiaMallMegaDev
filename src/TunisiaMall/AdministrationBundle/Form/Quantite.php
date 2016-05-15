<?php

namespace TunisiaMall\AdministrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use TunisiaMall\AdminBundle\Form\MediaType;

class Quantite extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('qte')
                
                ->add('Modifier', 'submit');
    }

    public function getName() {
        return 'panier2';
    }

}
