<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Form\Common\Type\Generic;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType as BaseType;

class ChoiceType extends AbstractType
{
    public function getParent()
    {
        return BaseType::class;
    }
}