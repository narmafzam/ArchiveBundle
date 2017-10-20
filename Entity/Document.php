<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/9/26
 */

namespace Narmafzam\ArchiveBundle\Entity;

use Narmafzam\ArchiveBundle\Entity\Interfaces\DescriptionInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\DocumentInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\Subjectinterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\TitleInterface;
use Narmafzam\ArchiveBundle\Entity\Traits\DeletedTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\DescriptionTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\IdTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\SubjectTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\TimestampTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\TitleTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks()
 */
abstract class Document implements DocumentInterface, TitleInterface, DescriptionInterface, Subjectinterface
{
    use IdTrait;
    use TitleTrait;
    use TimestampTrait;
    use DescriptionTrait;
    use SubjectTrait;
    use DeletedTrait;
}