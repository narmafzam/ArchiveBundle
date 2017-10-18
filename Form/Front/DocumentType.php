<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/13
 */

namespace Narmafzam\ArchiveBundle\Form\Front;

use Symfony\Component\Form\AbstractType;

class DocumentType extends AbstractType
{
    public function getParent()
    {
        return \Narmafzam\ArchiveBundle\Form\Common\DocumentType::class;
    }

    public function getBlockPrefix()
    {
        return 'front_document';
    }
}