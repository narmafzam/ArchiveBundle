<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Form\Front;

use Symfony\Component\Form\AbstractType;

class ContractType extends AbstractType
{
    public function getParent()
    {
        return \Narmafzam\ArchiveBundle\Form\Common\ContractType::class;
    }

    public function getBlockPrefix()
    {
        return 'front_contract';
    }
}