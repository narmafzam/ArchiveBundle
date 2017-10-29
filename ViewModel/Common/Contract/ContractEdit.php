<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\ViewModel\Common\Contract;

use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractInterface;
use Symfony\Component\Form\FormInterface;

class ContractEdit
{
    const TEMPLATE = '@NarmafzamArchive/Contract/edit.html.twig';

    protected $contractFormView;

    protected $contract;

    public function __construct(FormInterface $contractForm, ContractInterface $contract)
    {
        $this->contractFormView = $contractForm->createView();
        $this->contract = $contract;
    }

    public function getForm()
    {
        return $this->contractFormView;
    }

    public function getContract()
    {
        return $this->contract;
    }
}