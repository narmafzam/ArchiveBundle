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
 * @package Narmafzam\ArchiveBundle\Model\AttachableHandler
 */
class ContractHandler extends AttachableHandler implements ContractHandlerInterface
{
    /**
     * @param ContractInterface $contract
     * @return $this
     */
    public function newContract(ContractInterface $contract)
    {
        $this->getEntityManager()->persist($contract);
        $this->getEntityManager()->flush();

        return $this;
    }

    /**
     * @param ContractInterface $contract
     * @return $this
     */
    public function editContract(ContractInterface $contract)
    {
        $this->getEntityManager()->flush();

        return $this;
    }

    /**
     * @param string $id
     * @return null|ContractInterface
     *
     * @throws \Exception
     */
    public function getContract($id)
    {
        $contract = $this->getRepository()->find($id);

        if (is_object($contract) && !$contract instanceof ContractInterface) {

            throw new \Exception();
        }

        return $contract;
    }

    /**
     * @return array
     */
    public function getContracts()
    {
        return $this->getRepository()->findAll();
    }

}