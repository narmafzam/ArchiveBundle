<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 4:11 PM
 */

namespace Narmafzam\ArchiveBundle\Form\Common\Type;

use Narmafzam\ArchiveBundle\Form\Common\Type\Generic\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TitleType extends TextType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'label' => 'title'
        ));
    }
}