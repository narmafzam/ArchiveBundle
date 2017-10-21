<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/21
 */

namespace Narmafzam\ArchiveBundle\Form\Common;

use Narmafzam\ArchiveBundle\Form\Common\Type\ContractCommonLineChoicesType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractTemplateChoicesType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractTemplateChoiceType;
use Narmafzam\ArchiveBundle\Form\Common\Type\DescriptionType;
use Narmafzam\ArchiveBundle\Form\Common\Type\TitleType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContractTemplateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TitleType::class)
            ->add('description', DescriptionType::class)
            ->add('parent', ContractTemplateChoiceType::class)
            ->add('children', ContractTemplateChoicesType::class)
            ->add('commonLines', ContractCommonLineChoicesType::class)
        ;
    }
}