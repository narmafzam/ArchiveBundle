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
    protected $uploadPath;

    /**
     * ContractHandler constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param string                 $dataClass
     * @param string                 $webDirectory
     * @param string                 $uploadPath
     */
    public function __construct(EntityManagerInterface $entityManager, string $dataClass, string $webDirectory, string $uploadPath)
    {
        parent::__construct($entityManager, $dataClass, $webDirectory);

        $this->uploadPath = $uploadPath;
    }

    /**
     * @return string
     */
    public function getUploadPath(): string
    {
        return $this->uploadPath;
    }

    /**
     * @param ContractInterface $contract
     * @return $this
     */
    public function newContract(ContractInterface $contract)
    {
        $this->storeContractAttachments($contract);
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
        $this->storeContractAttachments($contract);
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
    public function storeContractAttachments(ContractInterface $contract)
    {
        parent::storeAttachments($contract, $this->getUploadPath());
    }

    /**
     * @param ContractInterface $contract
     */
    public function retrieveContractAttachments(ContractInterface $contract)
    {
        parent::retrieveAttachments($contract);
    }

}