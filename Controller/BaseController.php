<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
    protected $formTypeClass;

    /**
     * Controller constructor.
     * @param $contractType
     */
    public function __construct($formTypeClass)
    {
        $this->formTypeClass = $formTypeClass;
    }

    /**
     * @return mixed
     */
    public function getFormTypeClass()
    {
        return $this->formTypeClass;
    }
}