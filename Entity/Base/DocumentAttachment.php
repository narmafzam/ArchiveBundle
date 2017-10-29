<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/9/26
 */

namespace Narmafzam\ArchiveBundle\Entity\Base;

use Narmafzam\ArchiveBundle\Entity\Interfaces\DocumentAttachmentInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\TitleInterface;
use Narmafzam\ArchiveBundle\Entity\Traits\LocationTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\IdTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\MimeTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\TimestampTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\TitleTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks()
 */
abstract class DocumentAttachment implements DocumentAttachmentInterface, TitleInterface
{
    use IdTrait;
    use TitleTrait;
    use LocationTrait;
    use MimeTrait;
    use TimestampTrait;
}