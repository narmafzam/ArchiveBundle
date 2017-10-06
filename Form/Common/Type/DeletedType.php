<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 4:24 PM
 */

namespace Narmafzam\ArchiveBundle\Form\Common\Type;

use Narmafzam\ArchiveBundle\Form\Common\Type\Generic\CheckboxType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeletedType extends CheckboxType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'label'=> 'deleted'
        ));
    }
}