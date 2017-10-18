<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Date: 2017/9/29
 */

namespace Narmafzam\ArchiveBundle\Entity;

use Narmafzam\ArchiveBundle\Entity\Interfaces\LetterAttachmentInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\TitleInterface;
use Narmafzam\ArchiveBundle\Entity\Traits\AttachmentTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\IdTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\TitleTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
abstract class LetterAttachment implements LetterAttachmentInterface, TitleInterface
{
    use IdTrait;
    use TitleTrait;
    use AttachmentTrait;
}