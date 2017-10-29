<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Model\Handler\Interfaces;

use Doctrine\ORM\EntityManagerInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\DocumentInterface;

/**
 * Interface DocumentHandlerInterface
 * @package Narmafzam\ArchiveBundle\Model\Handler\Interfaces
 */
interface DocumentHandlerInterface extends HandlerInterface
{
    /**
     * ContractHandlerInterface constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param string                 $dataClass
     * @param string                 $uploadDirectory
     */
    public function __construct(EntityManagerInterface $entityManager, string $dataClass, string $uploadDirectory);

    /**
     * @param DocumentInterface $document
     *
     * @return mixed
     */
    public function newDocument(DocumentInterface $document);

    /**
     * @param DocumentInterface $document
     *
     * @return mixed
     */
    public function editDocument(DocumentInterface $document);

    /**
     * @param string $id
     */
    public function getDocument($id);

    /**
     * @return array
     */
    public function getDocuments();
}