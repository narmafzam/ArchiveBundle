<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/18
 */

namespace Narmafzam\ArchiveBundle\Model\Handler\Contract;

use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractInterface;
use Narmafzam\ArchiveBundle\Model\Handler\Handler;
use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\ContractHandlerInterface;

/**
 * Class ContractHandler
 * @package Narmafzam\ArchiveBundle\Model\Handler\Contract
 */
class ContractHandler extends Handler implements ContractHandlerInterface
{
    public function newContract(ContractInterface $contract)
    {
        $dataClass = $this->getDataClass();
        $contract = new $dataClass;
    }
}