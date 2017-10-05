<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 4:09 PM
 */

namespace Narmafzam\ArchiveBundle\Form;

use Narmafzam\ArchiveBundle\Form\Type\DeletedType;
use Narmafzam\ArchiveBundle\Form\Type\DescriptionType;
use Narmafzam\ArchiveBundle\Form\Type\SubjectType;
use Narmafzam\ArchiveBundle\Form\Type\TitleType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContractType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TitleType::class)
            ->add('description', DescriptionType::class)
            ->add('subject', SubjectType::class)
            ->add('deleted', DeletedType::class)
        ;
    }
}