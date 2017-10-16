<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/16
 */

namespace Narmafzam\ArchiveBundle\Form\Common;

use Symfony\Component\Form\AbstractType;

class LetterAttachmentType extends AbstractType
{
    /**
     * @var string
     */
    protected $dataClass;

    /**
     * @param string $dataClass
     */
    public function __construct($dataClass)
    {
        $this->dataClass = $dataClass;
    }

    /**
     * @return string
     */
    public function getDataClass()
    {
        return $this->dataClass;
    }

    public function getParent()
    {
        return AttachmentType::class;
    }
}