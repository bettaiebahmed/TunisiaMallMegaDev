<?php

namespace TunisiaMall\AdministrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use TunisiaMall\AdminBundle\Form\MediaType;

class Recherche extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('nomProduit')
                
                ->add('Recherche', 'submit');
    }

    public function getName() {
        return 'nom';
    }

}
