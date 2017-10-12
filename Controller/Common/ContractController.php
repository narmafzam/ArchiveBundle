<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Controller\Common;

use Narmafzam\ArchiveBundle\Controller\BaseController;

class ContractController extends BaseController
{
    protected $formTypeClass;

    /**
     * ContractController constructor.
     * @param $contractType
     */
    public function __construct($formTypeClass)
    {
        $this->formTypeClass = $formTypeClass;
    }
}