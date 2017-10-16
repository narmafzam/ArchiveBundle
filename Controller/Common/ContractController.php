<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Controller\Common;

use Narmafzam\ArchiveBundle\Controller\BaseController;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContractController extends BaseController
{
    protected function getAddForm(ContractInterface $contract = null)
    {
        $form = $this->createForm($this->getFormTypeClass(), $contract)
            ->add('submit', SubmitType::class);

        return $form;
    }

}