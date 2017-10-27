<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\ViewModel\Common\Document;

use Narmafzam\ArchiveBundle\Entity\Interfaces\DocumentInterface;
use Narmafzam\ArchiveBundle\ViewModel\BaseViewModel;
use Narmafzam\ArchiveBundle\ViewModel\Interfaces\DocumentShowInterface;
use Symfony\Component\Routing\RouterInterface;

class DocumentShow extends BaseViewModel implements DocumentShowInterface
{
    const TEMPLATE = '@NarmafzamArchive/Document/show.html.twig';

    private $document;

    public function __construct(string $dataClass, DocumentInterface $document, RouterInterface $router)
    {
        parent::__construct($dataClass, $router);
        $this->document = $document;
    }

    public function getDocument()
    {
        return $this->document;
    }

}