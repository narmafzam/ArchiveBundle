<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 4:15 PM
 */

namespace Narmafzam\ArchiveBundle\Form\Type;

use Narmafzam\ArchiveBundle\Form\Type\Generic\TextareaType;
use Symfony\Component\Form\AbstractType;

class DescriptionType extends AbstractType
{
    public function getParent()
    {
        return TextareaType::class;
    }
}