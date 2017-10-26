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
    public function getRepository();

    /**
     * HandlerInterface constructor.
     * @param EntityManagerInterface $entityManager
     * @param string $dataClass
     * @param string $uploadDirectory
     */
    public function __construct(EntityManagerInterface $entityManager, $dataClass, $uploadDirectory);

    /**
     * @return EntityManagerInterface
     */
    public function getEntityManager(): EntityManagerInterface;

    /**
     * @return string
     */
    public function getUploadDirectory(): string;

    /**
     * @param AttachableInterface $attachable
     * @return AttachableInterface
     */
    public function storeAttachments(AttachableInterface $attachable) : AttachableInterface;
}