<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\ViewModel\Common\Document;

use Narmafzam\ArchiveBundle\Entity\Interfaces\DocumentInterface;
use Symfony\Component\Form\FormInterface;

class DocumentEdit
{
    const TEMPLATE = '@NarmafzamArchive/Document/edit.html.twig';

    protected $documentFormView;

    protected $document;

    public function __construct(FormInterface $documentForm, DocumentInterface $document)
    {
        $this->documentFormView = $documentForm->createView();
        $this->document = $document;
    }

    public function getForm()
    {
        return $this->documentFormView;
    }
}