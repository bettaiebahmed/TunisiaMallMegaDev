<?php
namespace TunisiaMall\AdministrationBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class Payer extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('adresse')
               
                ->add('Payer', 'submit');
    }

    public function getName() {
        return 'Payer';
    }
}