<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractTemplateInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\DescriptionInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\TitleInterface;
use Narmafzam\ArchiveBundle\Entity\Traits\DescriptionTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\IdTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\TimestampTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\TitleTrait;

/**
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks()
 */
abstract class ContractTemplate implements ContractTemplateInterface, TitleInterface, DescriptionInterface
{
    use IdTrait;
    use TitleTrait;
    use DescriptionTrait;
    use TimestampTrait;
}