<?php

namespace DPC\HomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
// FormType
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use DPC\StoreBundle\Form\ImageType;
use DPC\HomeBundle\Form\SectionThreeElementType;
use DPC\HomeBundle\Form\SectionFourElementType;

class HomeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array('label' => 'Titre Accueil'))
            ->add('sectionOne', SectionOneType::class)
            ->add('sectionTwo', SectionTwoType::class)
            ->add('titleSectionThree', TextType::class)
            ->add('titleSectionFour', TextType::class)
            ->add('slides', CollectionType::class, array(
                    'entry_type' => ImageType::class,
                    'allow_add' => true,
                    'allow_delete' => true,
                    'required' => false,
                    'by_reference' => false
                ))
            ->add('sectionFourElements', CollectionType::class, array(
                    'entry_type' => SectionFourElementType::class,
                    'allow_add' => true,
                    'allow_delete' => true,
                    'required' => false,
                    'by_reference' => false
                ))
            ->add('sectionThreeElements', CollectionType::class, array(
                    'entry_type' => SectionThreeElementType::class,
                    'allow_add' => true,
                    'allow_delete' => true,
                    'required' => false,
                    'by_reference' => false
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DPC\HomeBundle\Entity\Home'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dpc_homebundle_home';
    }


}
