<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Entity\Interfaces;

/**
 * Interface ContractLineInterface
 * @package Narmafzam\ArchiveBundle\Entity\Interfaces
 */
interface ContractLineInterface
{
    /**
     * @return ContractInterface
     */
    public function getContract() : ContractInterface;

    /**
     * @param ContractInterface $contract
     *
     * @return mixed
     */
    public function setContract(ContractInterface $contract);

    /**
     * @return ContractLineKindInterface
     */
    public function getKind() : ContractLineKindInterface;

    /**
     * @param ContractLineKindInterface $contractLineKind
     *
     * @return mixed
     */
    public function setKind(ContractLineKindInterface $contractLineKind);
}