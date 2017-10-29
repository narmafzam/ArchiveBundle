<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/8
 */

namespace Narmafzam\ArchiveBundle\Form\Common;

use Narmafzam\ArchiveBundle\Form\AbstractWithDataClassType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractLineChoicesType;
use Narmafzam\ArchiveBundle\Form\Common\Type\DescriptionType;
use Narmafzam\ArchiveBundle\Form\Common\Type\SubjectType;
use Narmafzam\ArchiveBundle\Form\Common\Type\TitleType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContractType extends AbstractWithDataClassType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TitleType::class)
            ->add('subject', SubjectType::class)
            ->add('description', DescriptionType::class)
            ->add('attachments', CollectionType::class, array(
                'entry_type'    => ContractAttachmentType::class,
                'entry_options' => array(
                    'label'     => false,
                ),
                'allow_add'     => true,
                'allow_delete'  => true,
                'by_reference'  => false,
            ))
            ->add('lines', ContractLineChoicesType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->getDataClass()
        ));
    }
}