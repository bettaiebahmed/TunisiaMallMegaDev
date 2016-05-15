<?php
namespace TunisiaMall\AdministrationBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class AjoutPack extends AbstractType {
    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('nomPub')
                ->add('typePub')
                
                ->add('Ajouter', 'submit');
    }
    public function getName() {
        return 'PackPublicite';
    }
}