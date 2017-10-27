<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\ViewModel\Common\Letter;

use Narmafzam\ArchiveBundle\Entity\Interfaces\LetterInterface;
use Symfony\Component\Form\FormInterface;

class LetterEdit
{
    const TEMPLATE = '@NarmafzamArchive/Letter/edit.html.twig';

    protected $letterFormView;

    protected $letter;

    public function __construct(FormInterface $letterForm, LetterInterface $letter)
    {
        $this->letterFormView = $letterForm->createView();
        $this->letter = $letter;
    }

    public function getForm()
    {
        return $this->letterFormView;
    }
}