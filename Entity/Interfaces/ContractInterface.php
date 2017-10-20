<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/13
 */

namespace Narmafzam\ArchiveBundle\Entity\Interfaces;

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
}