<?php
namespace TunisiaMall\AdministrationBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use TunisiaMall\AdministrationBundle\Form\MediaType;

class AjoutEnseigne extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('nom')
                
                 ->add('image', new MediaType())
                ->add('Ajouter', 'submit');
    }

    public function getName() {
        return 'CarteFidelite';
    }
}