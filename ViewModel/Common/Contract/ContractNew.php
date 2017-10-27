<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\ViewModel\Common\Contract;

use Symfony\Component\Form\FormInterface;

class ContractNew
{
    const TEMPLATE = '@NarmafzamArchive/Contract/new.html.twig';

    protected $contractFormView;

    public function __construct(FormInterface $contractForm)
    {
        $this->contractFormView = $contractForm->createView();
    }

    public function getForm()
    {
        return $this->contractFormView;
    }
}