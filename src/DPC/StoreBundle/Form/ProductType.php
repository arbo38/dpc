<?php 
namespace DPC\StoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use DPC\StoreBundle\Form\ImageType;
use DPC\StoreBundle\Entity\Image;


class ProductType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array('label' => 'Titre'))
            ->add('description', TextareaType::class, array('required' => false))
            ->add('price', NumberType::class)
            ->add('discount', IntegerType::class, array('required' => false))
            ->add('occasion', CheckboxType::class, array('required' => false))
            ->add('promo', CheckboxType::class, array('required' => false))
            ->add('warranty', IntegerType::class)
            ->add('images', CollectionType::class, array(
                'entry_type' => ImageType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'required' => false,
                'by_reference' => false,
                'label' => false
            ))
            ->add('categories', EntityType::class, array(
                'class'        => 'DPCStoreBundle:Category',
                'choice_label' => 'Title',
                'multiple'     => true,
                'required' => true,
              ))
            ->add('brand', EntityType::class, array(
                'class'        => 'DPCStoreBundle:Brand',
                'choice_label' => 'Title',
                'multiple'     => false,
                'required' => true
              ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DPC\StoreBundle\Entity\Product'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dpc_storebundle_product';
    }


}
