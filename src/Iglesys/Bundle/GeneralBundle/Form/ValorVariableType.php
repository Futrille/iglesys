<?php

namespace Iglesys\Bundle\GeneralBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ValorVariableType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo')
            ->add('valor')
            ->add('nombre')
            ->add('orden')
            ->add('descripcion')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Iglesys\Bundle\GeneralBundle\Entity\ValorVariable'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'iglesys_bundle_generalbundle_valorvariable';
    }
}
