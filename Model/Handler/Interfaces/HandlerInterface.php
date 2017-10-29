<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/18
 */

namespace Narmafzam\ArchiveBundle\Model\Handler\Interfaces;

use Doctrine\ORM\EntityManagerInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\AttachableInterface;

/**
 * Interface HandlerInterface
 * @package Narmafzam\ArchiveBundle\Model\Handler\Interfaces
 */
interface HandlerInterface
{
    /**
     * @return EntityManagerInterface
     */
    public function getEntityManager(): EntityManagerInterface;

    /**
     * @return mixed
     */
    public function getRepository();

    /**
     * @return string
     */
    public function getDataClass(): string;

    /**
     * @param AttachableInterface $attachable
     * @return AttachableInterface
     */
    public function storeAttachments(AttachableInterface $attachable, string $uploadDirectory): AttachableInterface;
}