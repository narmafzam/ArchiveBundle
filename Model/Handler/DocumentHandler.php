<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Model\Handler;

use Narmafzam\ArchiveBundle\Entity\Interfaces\DocumentInterface;
use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\DocumentHandlerInterface;

/**
 * Class DocumentHandler
 * @package Narmafzam\ArchiveBundle\Model\AttachableHandler
 */
class DocumentHandler extends AttachableHandler implements DocumentHandlerInterface
{
    /**
     * @param DocumentInterface $document
     * @return $this
     */
    public function newDocument(DocumentInterface $document)
    {
        $this->getEntityManager()->persist($document);
        $this->getEntityManager()->flush();

        return $this;
    }

    /**
     * @param DocumentInterface $document
     * @return $this
     */
    public function editDocument(DocumentInterface $document)
    {
        $this->getEntityManager()->flush();

        return $this;
    }

    /**
     * @param string $id
     * @return null|object
     */
    public function getDocument($id)
    {
        $document = $this->getRepository()->find($id);

        return $document;
    }

    /**
     * @return array
     */
    public function getDocuments()
    {
        return $this->getRepository()->findAll();
    }

}