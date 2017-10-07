<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/9/26
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
 * @ORM\MappedSuperclass
 */
class Document
{
    use IdTrait;
    use TitleTrait;
    use TimestampableTrait;
    use DescriptionTrait;
    use SubjectTrait;
    use DeletedTrait;

    /**
     * @ORM\ManyToOne(targetEntity="Narmafzam\ArchiveBundle\Entity\DocumentType", inversedBy="documents")
     */
    protected $type;

    /**
     * @return DocumentType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param DocumentType $type
     */
    public function setType(DocumentType $type)
    {
        $this->type = $type;
    }

}