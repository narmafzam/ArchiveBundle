<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\ViewModel\Common\Document;

use Symfony\Component\Form\FormInterface;

class DocumentNew
{
    const TEMPLATE = '@NarmafzamArchive/Document/new.html.twig';

    protected $documentFormView;

    public function __construct(FormInterface $documentForm)
    {
        $this->documentFormView = $documentForm->createView();
    }

    public function getForm()
    {
        return $this->documentFormView;
    }
}