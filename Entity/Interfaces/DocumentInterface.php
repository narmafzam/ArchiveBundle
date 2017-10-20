<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/14
 */

namespace Narmafzam\ArchiveBundle\Entity\Interfaces;

/**
 * Interface DocumentInterface
 * @package Narmafzam\ArchiveBundle\Entity\Interfaces
 */
interface DocumentInterface extends AttachableInterface
{
    /**
     * @param \Narmafzam\ArchiveBundle\Entity\Interfaces\DocumentAttachmentInterface $attachment
     *
     * @return mixed
     */
    public function addAttachment(DocumentAttachmentInterface $attachment);

    /**
     * @param \Narmafzam\ArchiveBundle\Entity\Interfaces\DocumentAttachmentInterface $attachment
     *
     * @return mixed
     */
    public function removeAttachment(DocumentAttachmentInterface $attachment);
}