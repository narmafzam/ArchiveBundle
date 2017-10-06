<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 4:17 PM
 */

namespace Narmafzam\ArchiveBundle\Form\Common\Type;

use Narmafzam\ArchiveBundle\Form\Common\Type\Generic\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubjectType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'label' =>'subject'
        ));
    }
}