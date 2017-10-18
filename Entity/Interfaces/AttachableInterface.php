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
 * Interface AttachableInterface
 * @package Narmafzam\ArchiveBundle\Entity\Interfaces
 */
interface AttachableInterface
{
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getAttachments() : ArrayCollection;

    /**
     * @param \Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface $attachment
     *
     * @return mixed
     */
    public function addAttachment(AttachmentInterface $attachment);

    /**
     * @param \Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface $attachment
     *
     * @return mixed
     */
    public function removeAttachment(AttachmentInterface $attachment);
}