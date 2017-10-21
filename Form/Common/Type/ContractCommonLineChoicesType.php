<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/21
 */

namespace Narmafzam\ArchiveBundle\Form\Common\Type;

use Narmafzam\ArchiveBundle\Form\Common\Type\Generic\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContractCommonLineChoicesType extends AbstractType
{
    /**
     * @var string
     */
    protected $dataClass;

    /**
     * @param string $dataClass
     */
    public function __construct($dataClass)
    {
        $this->dataClass = $dataClass;
    }

    /**
     * @return string
     */
    public function getDataClass()
    {
        return $this->dataClass;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'class'    => $this->getDataClass(),
            'expanded' => false,
            'multiple' => false,
        ));
    }

    public function getParent()
    {
        return EntityType::class;
    }
}