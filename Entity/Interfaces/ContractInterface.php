<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/14
 */

namespace Narmafzam\ArchiveBundle\Entity\Interfaces;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Interface ContractInterface
 * @package Narmafzam\ArchiveBundle\Entity\Interfaces
 */
interface ContractInterface extends AttachableInterface
{
    /**
     * @param \Narmafzam\ArchiveBundle\Entity\Interfaces\ContractAttachmentInterface $attachment
     *
     * @return mixed
     */
    public function addAttachment(ContractAttachmentInterface $attachment);

    /**
     * @param \Narmafzam\ArchiveBundle\Entity\Interfaces\ContractAttachmentInterface $attachment
     *
     * @return mixed
     */
    public function removeAttachment(ContractAttachmentInterface $attachment);

    /**
     * @return ArrayCollection
     */
    public function getLines() : ArrayCollection;

    /**
     * @param ContractLineInterface $line
     *
     * @return mixed
     */
    public function addLine(ContractLineInterface $line);

    /**
     * @param ContractLineInterface $line
     *
     * @return mixed
     */
    public function removeLine(ContractLineInterface $line);
}