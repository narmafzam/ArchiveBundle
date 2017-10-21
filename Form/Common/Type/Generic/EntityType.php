<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Form\Common\Type\Generic;

use Symfony\Bridge\Doctrine\Form\Type\EntityType as BaseType;
use Symfony\Component\Form\AbstractType;

class EntityType extends AbstractType
{
    public function getParent()
    {
        return BaseType::class;
    }

    public function getBlockPrefix()
    {
        return 'narmafzam_entity';
    }
}