<?php

namespace Testowy\TestowyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BookType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('author')
            ->add('price','money')
            ->add('title')
            ->add('categories','collection',array(
                'type'=>new BookCategoryType(),
                'allow_add'=>true,
                'allow_delete'=>true,

            ))
            ->add('save','submit',array(
                'label'=>'Zapisz'
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Testowy\TestowyBundle\Entity\Book'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'testowy_testowybundle_book';
    }
}
