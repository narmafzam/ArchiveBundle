<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 2:02 PM
 */

namespace Narmafzam\ArchiveBundle\Controller\Front;

use Narmafzam\ArchiveBundle\Controller\Common\DocumentController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DocumentController extends BaseController
{
    /**
     * @Route('/', 'front_document_list')
     */
    public function listAction()
    {

    }

    /**
     * @Route('/new', 'front_document_new')
     */
    public function newAction()
    {

    }

    /**
     * @Route('/edit', 'front_document_edit')
     */
    public function editAction()
    {

    }

    /**
     * @Route('/delete', 'front_document_delete')
     */
    public function deleteAction()
    {

    }
}