<?php
namespace TunisiaMall\AdministrationBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class AjoutCarteFid extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('num')
                ->add('validite')
                ->add('nbrePoint')
                ->add('idboutique')
                ->add('Ajouter', 'submit');
    }

    public function getName() {
        return 'CarteFidelite';
    }
}