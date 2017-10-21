<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Form\Common;

use Narmafzam\ArchiveBundle\Form\Common\Type\BodyType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractLineKindChoiceType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractTemplateChoicesType;
use Narmafzam\ArchiveBundle\Form\Common\Type\DescriptionType;
use Narmafzam\ArchiveBundle\Form\Common\Type\TitleType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContractCommonLineType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TitleType::class)
            ->add('body', BodyType::class)
            ->add('description', DescriptionType::class)
            ->add('kind', ContractLineKindChoiceType::class)
            ->add('templates', ContractTemplateChoicesType::class)
        ;
    }
}