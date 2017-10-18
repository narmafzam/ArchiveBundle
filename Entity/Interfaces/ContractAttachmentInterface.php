<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/13
 */

namespace Narmafzam\ArchiveBundle\Entity\Interfaces;

/**
 * Interface ContractAttachmentInterface
 * @package Narmafzam\ArchiveBundle\Entity\Interfaces
 */
interface ContractAttachmentInterface extends AttachmentInterface
{
    /**
     * @return \Narmafzam\ArchiveBundle\Entity\Interfaces\ContractInterface
     */
    public function getContract() : ContractInterface;

    /**
     * @param \Narmafzam\ArchiveBundle\Entity\Interfaces\ContractInterface $contract
     *
     * @return mixed
     */
    public function setContract(ContractInterface $contract);
}