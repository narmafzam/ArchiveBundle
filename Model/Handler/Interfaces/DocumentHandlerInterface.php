<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Model\Handler\Interfaces;

use Narmafzam\ArchiveBundle\Entity\Interfaces\DocumentInterface;

/**
 * Interface DocumentHandlerInterface
 * @package Narmafzam\ArchiveBundle\Model\Handler\Interfaces
 */
interface DocumentHandlerInterface extends HandlerInterface
{
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
}