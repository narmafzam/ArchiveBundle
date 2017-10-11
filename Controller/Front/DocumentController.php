<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Controller\Front;

use Narmafzam\ArchiveBundle\Controller\Common\DocumentController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DocumentController extends BaseController
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
//    /**
//     * @Route('/', 'front_document_list')
//     */
//    public function listAction()
//    {
//
//    }
//
//    /**
//     * @Route('/new', 'front_document_new')
//     */
//    public function newAction()
//    {
//
//    }
//
//    /**
//     * @Route('/edit', 'front_document_edit')
//     */
//    public function editAction()
//    {
//
//    }
//
//    /**
//     * @Route('/delete', 'front_document_delete')
//     */
//    public function deleteAction()
//    {
//
//    }
}