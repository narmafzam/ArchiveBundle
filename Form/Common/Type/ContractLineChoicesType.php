<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Form\Common\Type;

use Narmafzam\ArchiveBundle\Form\AbstractWithDataClassType;
use Narmafzam\ArchiveBundle\Form\Common\Type\Generic\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContractLineChoicesType extends AbstractWithDataClassType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'class'    => $this->getDataClass(),
            'expanded' => false,
            'multiple' => false,
        ));
    }

    public function getParent()
    {
        return EntityType::class;
    }
}