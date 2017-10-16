<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/16
 */

namespace Narmafzam\ArchiveBundle\Form\Front;

use Narmafzam\ArchiveBundle\Entity\DocumentAttachment;
use Narmafzam\ArchiveBundle\Form\Common\Type\LocationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DocumentAttachmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('location', LocationType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => DocumentAttachment::class
        ));
    }
}