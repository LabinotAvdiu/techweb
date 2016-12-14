<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class CategoryType extends AbstractType
{
    /**
    * {@inheritdoc}
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
        ->add('project', EntityType::class, [
            'class'         => 'AppBundle:Project',
            'choice_label'  => 'name',
            "attr"     => [
                "class"=>"form-control"
            ]
        ]);
    }

    /**
    * {@inheritdoc}
    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Category'
        ));
    }

    /**
    * {@inheritdoc}
    */
    public function getBlockPrefix()
    {
        return 'appbundle_category';
    }


}
