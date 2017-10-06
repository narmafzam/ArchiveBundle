<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 4:15 PM
 */

namespace Narmafzam\ArchiveBundle\Form\Common\Type;

use Narmafzam\ArchiveBundle\Form\Common\Type\Generic\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DescriptionType extends TextareaType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'label' => 'description'
        ));
    }
}