<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/18
 */

namespace Narmafzam\ArchiveBundle\Model\Handler;

use Doctrine\ORM\EntityManagerInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractInterface;
use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\ContractHandlerInterface;

/**
 * Class ContractHandler
 * @package Narmafzam\ArchiveBundle\Model\Handler
 */
class ContractHandler extends Handler implements ContractHandlerInterface
{
    /**
     * @var string
     */
    protected $uploadDirectory;

    /**
     * ContractHandler constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param string                 $dataClass
     * @param string                 $uploadDirectory
     */
    public function __construct(EntityManagerInterface $entityManager, string $dataClass, string $uploadDirectory)
    {
        parent::__construct($entityManager, $dataClass);

        $this->uploadDirectory = $uploadDirectory;
    }

    /**
     * @return string
     */
    public function getUploadDirectory(): string
    {
        return $this->uploadDirectory;
    }

    /**
     * @param ContractInterface $contract
     * @return $this
     */
    public function newContract(ContractInterface $contract)
    {
        $this->storeAttachments($contract);
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
        $this->getEntityManager()->persist($contract);
        $this->getEntityManager()->flush();

        return $this;
    }

    /**
     * @param string $id
     * @return null|object
     */
    public function getContract($id)
    {
        $contract = $this->getRepository()->find($id);
        $this->retrieveContractAttachments($contract);

        return $contract;
    }

    /**
     * @return array
     */
    public function getContracts()
    {
        return $this->getRepository()->findAll();
    }

    /**
     * @param ContractInterface $contract
     *
     * @return ContractInterface
     */
    public function storeContractAttachments(ContractInterface $contract): ContractInterface
    {
        parent::storeAttachments($contract, $this->getUploadDirectory());
    }

    /**
     * @param ContractInterface $contract
     */
    public function retrieveContractAttachments(ContractInterface $contract)
    {
        parent::retrieveAttachments($contract, $this->getUploadDirectory());
    }

}