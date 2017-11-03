<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/18
 */

namespace Narmafzam\ArchiveBundle\Model\Handler;

use Doctrine\ORM\EntityManagerInterface;
use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\AttachableHandlerInterface;

/**
 * Class AttachableHandler
 * @package Narmafzam\ArchiveBundle\Model\AttachableHandler
 */
class AttachableHandler implements AttachableHandlerInterface
{
    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @var string
     */
    protected $dataClass;

    /**
     * AttachableHandler constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param string                 $dataClass
     */
    public function __construct(EntityManagerInterface $entityManager, string $dataClass)
    {
        $this->entityManager = $entityManager;
        $this->dataClass = $dataClass;
    }

    /**
     * @return EntityManagerInterface
     */
    public function getEntityManager(): EntityManagerInterface
    {
        return $this->entityManager;
    }

    /**
     * @return string
     */
    public function getDataClass(): string
    {
        return $this->dataClass;
    }

    /**
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    public function getRepository()
    {
        return $this->getEntityManager()->getRepository($this->getDataClass());
    }
}