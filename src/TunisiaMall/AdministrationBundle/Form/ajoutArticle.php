<?php

namespace TunisiaMall\AdministrationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use TunisiaMall\AdministrationBundle\Form\MediaType;

class ajoutArticle extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('ref')
                ->add('nomProduit')
                ->add('Description')
                ->add('typeProduit')
                ->add('prixdetaille')
                ->add('nom_categorie', 'entity',
                    array('property' => 'nom',
                        'class' => 'TunisiaMallBundle:Categorie',
                        'multiple'     => false,
            'expanded'     => false,
            'required' => false))
               
                ->add('idenseigne','entity',
                    array('property' => 'nom',
                        'class' => 'TunisiaMallBundle:Enseigne',
                        'multiple'     => false,
            'expanded'     => false,
            'required' => false))
                ->add('quantiteStock')
                ->add('prix')
                ->add('prixGros')
               
                ->add('image', new MediaType())
                ->add('Ajouter', 'submit');
    }

    public function getName() {
        return 'nom';
    }

}
