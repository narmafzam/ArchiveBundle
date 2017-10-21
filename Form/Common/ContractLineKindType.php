<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/21
 */

namespace Narmafzam\ArchiveBundle\Form\Common;

use Narmafzam\ArchiveBundle\Form\AbstractWithDataClassType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractCommonLineChoicesType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractLineChoicesType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractLineKindChoicesType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractLineKindChoiceType;
use Narmafzam\ArchiveBundle\Form\Common\Type\DescriptionType;
use Narmafzam\ArchiveBundle\Form\Common\Type\TitleType;
use Symfony\Component\Form\FormBuilderInterface;

class ContractLineKindType extends AbstractWithDataClassType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TitleType::class)
            ->add('description', DescriptionType::class)
            ->add('parent', ContractLineKindChoiceType::class)
            ->add('children', ContractLineKindChoicesType::class)
            ->add('commonLines', ContractCommonLineChoicesType::class)
            ->add('lines', ContractLineChoicesType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->getDataClass()
        ));
    }
}