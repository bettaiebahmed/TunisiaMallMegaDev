<?php
namespace TunisiaMall\AdministrationBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use TunisiaMall\AdminBundle\Form\MediaType;
class zonePack extends AbstractType {
    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('nomPub')
                ->add('emplacement', 'choice', array(
    'label' => 'Selectionner emplcament',
    'multiple' => true,
    'choices' => array('Haut' => 'Haut', 'Bas' => 'Bas')))
                
                
                ->add('Changer', 'submit');
    }
    public function getName() {
        return 'publicite';
    }
}