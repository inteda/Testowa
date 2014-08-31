<?php

namespace Testowy\TestowyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BookCategoryType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('priority','integer')
            ->add('category','entity',array(
                'label'=>'Kategorie',
                'class'=>'TestowyBundle:Category',
                'property'=>'name'
            ))
//            ->add('save','submit',array(
//                'label'=>'Zapisz'
//            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Testowy\TestowyBundle\Entity\BookHasCategory'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'testowy_testowybundle_book_has_category';
    }
}
