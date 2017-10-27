<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\ViewModel\Common\Letter;

use Symfony\Component\Form\FormInterface;

class LetterNew
{
    const TEMPLATE = '@NarmafzamArchive/Letter/new.html.twig';

    protected $letterFormView;

    public function __construct(FormInterface $letterForm)
    {
        $this->letterFormView = $letterForm->createView();
    }

    public function getForm()
    {
        return $this->letterFormView;
    }
}