<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/16
 */

namespace Narmafzam\ArchiveBundle\Form\Back;

use Narmafzam\ArchiveBundle\Form\Common\Type\DeletedType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LetterType extends AbstractType
{
    public function getParent()
    {
        return \Narmafzam\ArchiveBundle\Form\Common\LetterType::class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('deleted', DeletedType::class)
        ;
    }

    public function getBlockPrefix()
    {
        return 'back_letter';
    }
}