<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/14
 */

namespace Narmafzam\ArchiveBundle\Entity\Interfaces;

use Doctrine\Common\Collections\Collection;

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
     * @return Collection
     */
    public function getLines() : Collection;

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

    /**
     * @return Collection
     */
    public function getNotes() : Collection;

    /**
     * @param ContractNoteInterface $note
     *
     * @return mixed
     */
    public function addNote(ContractNoteInterface $note);

    /**
     * @param ContractNoteInterface $note
     *
     * @return mixed
     */
    public function removeNote(ContractNoteInterface $note);
}