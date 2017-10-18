<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/14
 */

namespace Narmafzam\ArchiveBundle\Entity\Interfaces;

/**
 * Interface LetterAttachmentInterface
 * @package Narmafzam\ArchiveBundle\Entity\Interfaces
 */
interface LetterAttachmentInterface extends AttachmentInterface
{
    /**
     * @return \Narmafzam\ArchiveBundle\Entity\Interfaces\LetterInterface
     */
    public function getLetter() : LetterInterface;

    /**
     * @param \Narmafzam\ArchiveBundle\Entity\Interfaces\LetterInterface $letter
     *
     * @return mixed
     */
    public function setLetter(LetterInterface $letter);
}