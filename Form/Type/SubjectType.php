<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 4:17 PM
 */

namespace Narmafzam\ArchiveBundle\Form\Type;

use Narmafzam\ArchiveBundle\Form\Type\Generic\TextType;
use Symfony\Component\Form\AbstractType;

class SubjectType extends AbstractType
{
    public function getParent()
    {
        return TextType::class;
    }
}