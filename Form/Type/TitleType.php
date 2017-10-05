<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 4:11 PM
 */

namespace Narmafzam\ArchiveBundle\Form\Type;

use Narmafzam\ArchiveBundle\Form\Type\Generic\TextType;
use Symfony\Component\Form\AbstractType;

class TitleType extends AbstractType
{
    public function getParent()
    {
        return TextType::class;
    }
}