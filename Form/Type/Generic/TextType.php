<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 4:29 PM
 */

namespace Narmafzam\ArchiveBundle\Form\Type\Generic;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType as BaseType;

class TextType extends AbstractType
{
    public function getParent()
    {
        return BaseType::class;
    }
}