<?php

namespace DPC\ServiceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
// FormClass
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use DPC\StoreBundle\Form\ImageType;
use DPC\StoreBundle\Entity\Image;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ServiceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class)
            ->add('shortDescription', TextareaType::class, array('required' => false))
            ->add('longDescription', TextareaType::class, array('required' => false))
            ->add('priceMin', NumberType::class)
            ->add('category', EntityType::class, array(
                'class'        => 'DPCServiceBundle:ServiceCategory',
                'choice_label' => 'Title',
                'multiple'     => false,
                'required' => true,
              ))
            ->add('image', ImageType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DPC\ServiceBundle\Entity\Service'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dpc_servicebundle_service';
    }


}
