<?php

namespace TunisiaMall\AdministrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class Promo extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                
                ->add('nom')
                ->add('reduction')
                ->add('dateDebut')
                ->add('dateFin')
                ->add('id_produit', 'entity',
                    array('property' => 'id',
                        'class' => 'TunisiaMallBundle:Produit',
                        'multiple'     => false,
            'expanded'     => false,
            'required' => false))
               
              
                ->add('Ajouter', 'submit');
    }

    public function getName() {
        return 'Promo';
    }

}
