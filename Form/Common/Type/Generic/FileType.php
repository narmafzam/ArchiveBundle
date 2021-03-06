<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/5
 */

namespace Narmafzam\ArchiveBundle\Form\Common\Type\Generic;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType as BaseType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FileType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'label'      => false,
            'required'   => false,
//            'data_class' => null
        ));
    }

    public function getParent()
    {
        return BaseType::class;
    }

    public function getBlockPrefix()
    {
        return 'narmafzam_file';
    }

}