<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Date: 2017/9/29
 */

namespace Narmafzam\ArchiveBundle\Entity;

use Narmafzam\ArchiveBundle\Entity\Traits\AttachmentTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\IdTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\TitleTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
class LetterAttachment
{
    use IdTrait;
    use TitleTrait;
    use AttachmentTrait;

}