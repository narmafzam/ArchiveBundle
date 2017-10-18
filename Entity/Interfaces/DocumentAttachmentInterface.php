<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/14
 */

namespace Narmafzam\ArchiveBundle\Entity\Interfaces;

/**
 * Interface DocumentAttachmentInterface
 * @package Narmafzam\ArchiveBundle\Entity\Interfaces
 */
interface DocumentAttachmentInterface extends AttachmentInterface
{
    /**
     * @return \Narmafzam\ArchiveBundle\Entity\Interfaces\DocumentInterface
     */
    public function getDocument() : DocumentInterface;

    /**
     * @param \Narmafzam\ArchiveBundle\Entity\Interfaces\DocumentInterface $document
     *
     * @return mixed
     */
    public function setDocument(DocumentInterface $document);
}