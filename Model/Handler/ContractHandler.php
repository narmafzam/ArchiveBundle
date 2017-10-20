<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/18
 */

namespace Narmafzam\ArchiveBundle\Model\Handler;

use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractInterface;
use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\ContractHandlerInterface;

/**
 * Class ContractHandler
 * @package Narmafzam\ArchiveBundle\Model\Handler
 */
class ContractHandler extends Handler implements ContractHandlerInterface
{
    /**
     * @param ContractInterface $contract
     */
    public function newContract(ContractInterface $contract)
    {
        $this->storeAttachments($contract);
        $this->getEntityManager()->persist($contract);
        $this->getEntityManager()->flush();
    }

    /**
     * @param ContractInterface $contract
     */
    public function editContract(ContractInterface $contract)
    {
        $this->getEntityManager()->persist($contract);
        $this->getEntityManager()->flush();
    }
}