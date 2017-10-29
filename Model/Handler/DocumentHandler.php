<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Model\Handler;

use Doctrine\ORM\EntityManagerInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\DocumentInterface;
use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\DocumentHandlerInterface;

/**
 * Class DocumentHandler
 * @package Narmafzam\ArchiveBundle\Model\Handler
 */
class DocumentHandler extends Handler implements DocumentHandlerInterface
{
    /**
     * @var string
     */
    protected $uploadDirectory;

    /**
     * DocumentHandler constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param string                 $dataClass
     * @param string                 $uploadDirectory
     */
    public function __construct(EntityManagerInterface $entityManager, string $dataClass, string $uploadDirectory)
    {
        parent::__construct($entityManager, $dataClass);

        $this->uploadDirectory = $uploadDirectory;
    }

    /**
     * @return string
     */
    public function getUploadDirectory(): string
    {
        return $this->uploadDirectory;
    }

    /**
     * @param DocumentInterface $document
     * @return true
     */
    public function newDocument(DocumentInterface $document)
    {
        $this->storeAttachments($document);
        $this->getEntityManager()->persist($document);
        $this->getEntityManager()->flush();

        return true;
    }

    /**
     * @param DocumentInterface $document
     * @return true
     */
    public function editDocument(DocumentInterface $document)
    {
        $this->getEntityManager()->persist($document);
        $this->getEntityManager()->flush();

        return true;
    }

    /**
     * @param string $id
     * @return null|object
     */
    public function getDocument($id)
    {
        $document = $this->getRepository()->find($id);
        $this->retrieveDocumentAttachments($document);

        return $document;
    }

    /**
     * @return array
     */
    public function getDocuments()
    {
        return $this->getRepository()->findAll();
    }

    /**
     * @param DocumentInterface $document
     *
     * @return DocumentInterface
     */
    public function storeDocumentAttachments(DocumentInterface $document): DocumentInterface
    {
        parent::storeAttachments($document, $this->getUploadDirectory());
    }

    /**
     * @param DocumentInterface $document
     */
    public function retrieveDocumentAttachments(DocumentInterface $document)
    {
        parent::retrieveAttachments($document, $this->getUploadDirectory());
    }

}