<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/18
 */

namespace Narmafzam\ArchiveBundle\Model\Handler\Interfaces;

use Doctrine\ORM\EntityManagerInterface;

/**
 * Interface AttachableHandlerInterface
 * @package Narmafzam\ArchiveBundle\Model\AttachableHandler\Interfaces
 */
interface AttachableHandlerInterface
{
    /**
     * @return EntityManagerInterface
     */
    public function getEntityManager(): EntityManagerInterface;

    /**
     * @return string
     */
    public function getDataClass(): string;

    /**
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    public function getRepository();

}