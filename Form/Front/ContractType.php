<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 4:09 PM
 */

namespace Narmafzam\ArchiveBundle\Form\Front;

use Narmafzam\ArchiveBundle\Entity\Contract;
use Narmafzam\ArchiveBundle\Form\Common\Type\DeletedType;
use Narmafzam\ArchiveBundle\Form\Common\Type\DescriptionType;
use Narmafzam\ArchiveBundle\Form\Common\Type\SubjectType;
use Narmafzam\ArchiveBundle\Form\Common\Type\TitleType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContractType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TitleType::class)
            ->add('description', DescriptionType::class)
            ->add('subject', SubjectType::class)
            ->add('deleted', DeletedType::class)
            ->add('attachments', CollectionType::class, array(
                'entry_type'    => ContractAttachmentType::class,
                'entry_options' => array(
                    'label'     => false
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Contract::class
        ));
    }
}