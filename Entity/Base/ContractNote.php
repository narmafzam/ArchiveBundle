<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/9/30
 */
namespace Narmafzam\ArchiveBundle\Entity\Base;

use Narmafzam\ArchiveBundle\Entity\Interfaces\BodyInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractNoteInterface;
use Narmafzam\ArchiveBundle\Entity\Traits\BodyTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\IdTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\TimestampTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
abstract class ContractNote implements ContractNoteInterface, BodyInterface
{
    use IdTrait;
    use BodyTrait;
    use TimestampTrait;
}