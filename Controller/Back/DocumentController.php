<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 2:02 PM
 */

namespace Narmafzam\ArchiveBundle\Controller\Back;

use Narmafzam\ArchiveBundle\Controller\Common\DocumentController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DocumentController extends BaseController
{
    /**
     * @Route('/', 'back_document_list')
     */
    public function listAction()
    {

    }

    /**
     * @Route('/new', 'back_document_new')
     */
    public function newAction()
    {

    }

    /**
     * @Route('/edit', 'back_document_edit')
     */
    public function editAction()
    {

    }

    /**
     * @Route('/delete', 'back_document_delete')
     */
    public function deleteAction()
    {

    }
}