<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/18
 */

namespace Narmafzam\ArchiveBundle\Model\Handler\Interfaces;

use Doctrine\ORM\EntityManagerInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractInterface;

/**
 * Interface ContractHandlerInterface
 * @package Narmafzam\ArchiveBundle\Model\Handler\Interfaces
 */
interface ContractHandlerInterface extends HandlerInterface
{
    /**
     * ContractHandlerInterface constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param string                 $dataClass
     * @param string                 $webDirectory
     * @param string                 $uploadPath
     */
    public function __construct(EntityManagerInterface $entityManager, string $dataClass, string $webDirectory, string $uploadPath);

    /**
     * @param ContractInterface $contract
     *
     * @return mixed
     */
    public function newContract(ContractInterface $contract);

    /**
     * @param ContractInterface $contract
     *
     * @return mixed
     */
    public function editContract(ContractInterface $contract);

    /**
     * @param string $id
     */
    public function getContract($id);

    /**
     * @return array
     */
    public function getContracts();
}