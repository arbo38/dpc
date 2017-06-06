<?php

namespace DPC\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class ProductSearchType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('title', TextType::class, array('required' => false))
        ->add('occasion', CheckboxType::class, array('required' => false))
        ->add('promo', CheckboxType::class, array('required' => false))
        ->add('category', EntityType::class, array(
                'class'        => 'DPCStoreBundle:Category',
                'choice_label' => 'Title',
                'multiple'     => false,
                'required' => false
              ))
        ->add('brand', EntityType::class, array(
                'class'        => 'DPCStoreBundle:Brand',
                'choice_label' => 'Title',
                'multiple'     => false,
                'required' => false
              ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DPC\AdminBundle\Entity\ProductSearch'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dpc_adminbundle_productsearch';
    }


}
