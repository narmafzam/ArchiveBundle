<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 4:32 PM
 */

namespace Narmafzam\ArchiveBundle\Form\Common\Type\Generic;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType as BaseType;

class TextareaType extends AbstractType
{
    public function getParent()
    {
        return BaseType::class;
    }
}