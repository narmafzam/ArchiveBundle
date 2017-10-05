<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 4:24 PM
 */

namespace Narmafzam\ArchiveBundle\Form\Type;

use Narmafzam\ArchiveBundle\Form\Type\Generic\BooleanType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeletedType extends BooleanType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault(
            'label', 'deleted'
        );
    }
}