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
use Narmafzam\ArchiveBundle\ViewModel\Interfaces\DocumentIndexInterface;
use Symfony\Component\Routing\RouterInterface;

class DocumentIndex extends BaseViewModel implements DocumentIndexInterface
{
    const TEMPLATE = '@NarmafzamArchive/Document/index.html.twig';

    private $documents;

    public function __construct(string $dataClass, array $documents, RouterInterface $router)
    {
        parent::__construct($dataClass, $router);
        $this->documents = $documents;
    }

    public function getDocuments()
    {
        return $this->documents;
    }

}