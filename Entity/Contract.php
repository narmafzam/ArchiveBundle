<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Date: 2017/9/29
 */

namespace Narmafzam\ArchiveBundle\Entity;

use Narmafzam\ArchiveBundle\Entity\Traits\DeletedTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\DescriptionTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\IdTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\SubjectTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\TimestampableTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\TitleTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contract")
 */
class Contract
{
    use IdTrait;
    use TitleTrait;
    use DescriptionTrait;
    use SubjectTrait;
    use DeletedTrait;
    use TimestampableTrait;

    /**
     * @ORM\OneToMany(targetEntity="Narmafzam\ArchiveBundle\Entity\ContractAttachment", mappedBy="contract")
     */
    private $attachments;

    /**
     * @ORM\OneToMany(targetEntity="Narmafzam\ArchiveBundle\Entity\ContractNote", mappedBy="contract")
     */
    private $notes;

    /**
     * Contract constructor.
     */
    public function __construct()
    {
        $this->attachments = new ArrayCollection();
        $this->notes = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param ContractAttachment $attachment
     */
    public function addAttachment(ContractAttachment $attachment)
    {
        $this->attachments->add($attachment);
    }

    /**
     * @return ArrayCollection
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param ContractNote $note
     */
    public function addNote(ContractNote $note)
    {
        $this->notes->add($note);
    }

}