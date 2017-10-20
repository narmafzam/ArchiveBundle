<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/14
 */

namespace Narmafzam\ArchiveBundle\Entity\Interfaces;

/**
 * Interface LetterInterface
 * @package Narmafzam\ArchiveBundle\Entity\Interfaces
 */
interface LetterInterface extends AttachableInterface
{
    /**
     * @param \Narmafzam\ArchiveBundle\Entity\Interfaces\LetterAttachmentInterface $attachment
     *
     * @return mixed
     */
    public function addAttachment(LetterAttachmentInterface $attachment);

    /**
     * @param \Narmafzam\ArchiveBundle\Entity\Interfaces\LetterAttachmentInterface $attachment
     *
     * @return mixed
     */
    public function removeAttachment(LetterAttachmentInterface $attachment);
}