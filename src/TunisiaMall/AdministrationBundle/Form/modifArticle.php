<?php

namespace TunisiaMall\AdministrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use TunisiaMall\AdminBundle\Form\MediaType;

class modifArticle extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('nomProduit')
                ->add('Description')
                ->add('typeProduit')
                ->add('quantiteStock')
                ->add('prix')
                

                ->add('Modifier', 'submit');
    }

    public function getName() {
        return 'nom';
    }

}
