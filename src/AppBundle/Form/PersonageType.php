<?php

namespace AppBundle\Form;

use AppBundle\Entity\Map;
use AppBundle\Entity\Player;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class PersonageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('age')
            ->add('gender')
            ->add('photo')
            ->add('receveiveMail')
            ->add('invention')
            ->add('job')
            ->add('job2')
            ->add('insideBuilding')
            ->add('rapport')
            ->add('map', EntityType::class, array(
                    'class' => Map::class,
                    'choice_label' => 'id',
                )
            )
            ->add('player', EntityType::class, array(
                    'class' => Player::class,
                    'choice_label' => 'firstname',
                )
            )
            ->add('personageStats')
            ->add('clan');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Personage'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_personage';
    }


}
