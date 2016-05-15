<?php
namespace TunisiaMall\AdministrationBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use TunisiaMall\AdminBundle\Form\MediaType;
class modifPack extends AbstractType {
    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('nomPub')
                ->add('typePub')
                
                
                ->add('Modifier', 'submit');
    }
    public function getName() {
        return 'publicite';
    }
}