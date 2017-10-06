<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 4:22 PM
 */

namespace Narmafzam\ArchiveBundle\Form\Common\Type\Generic;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType as BaseType;

class CheckboxType extends AbstractType
{
    public function getParent()
    {
        return BaseType::class;
    }
}