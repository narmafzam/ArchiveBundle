<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Controller\Back;

use Narmafzam\ArchiveBundle\Controller\Common\DocumentController as BaseController;
use Narmafzam\ArchiveBundle\ViewModel\Back\Document\DocumentEdit;
use Narmafzam\ArchiveBundle\ViewModel\Back\Document\DocumentIndex;
use Narmafzam\ArchiveBundle\ViewModel\Back\Document\DocumentNew;
use Narmafzam\ArchiveBundle\ViewModel\Back\Document\DocumentShow;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DocumentController
 * @package Narmafzam\ArchiveBundle\Controller\Back
 * @Route("/document")
 */
class DocumentController extends BaseController
{
    const ROUTE__DOCUMENT_INDEX  = 'back_document_index';
    const ROUTE__DOCUMENT_SHOW   = 'back_document_show';
    const ROUTE__DOCUMENT_NEW    = 'back_document_new';
    const ROUTE__DOCUMENT_EDIT   = 'back_document_edit';
    const ROUTE__DOCUMENT_DELETE = 'back_document_delete';

    /**
     * @Route("", name = Narmafzam\ArchiveBundle\Controller\Back\DocumentController::ROUTE__DOCUMENT_INDEX)
     * @Method("GET")
     */
    public function indexAction()
    {
        $handler = $this->getHandler();
        $documents = $handler->getDocuments();

        $model = new DocumentIndex($this->getDataClass(), $documents, $this->getRouter());

        return $this->renderResponse(DocumentIndex::TEMPLATE, array(
            'model' => $model
        ));
    }

    /**
     * @param Request   $request
     * @return Response A Response instance
     *
     * @Route("/new", name = Narmafzam\ArchiveBundle\Controller\Back\DocumentController::ROUTE__DOCUMENT_NEW)
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $form = $this->getAddForm($this->getFormTypeClass());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();
            $handler = $this->getHandler();
            $handler->newDocument($data);

            return $this->redirectToRoute(self::ROUTE__DOCUMENT_SHOW, array('id' => $data->getId()));
        }

        $model = new DocumentNew($form);

        return $this->renderResponse(DocumentNew::TEMPLATE, array(
            'model' => $model
        ));
    }

    /**
     * @Route("/{id}", name = Narmafzam\ArchiveBundle\Controller\Back\DocumentController::ROUTE__DOCUMENT_SHOW)
     * @Method("GET")
     */
    public function showAction(Request $request, $id)
    {
        $handler = $this->getHandler();
        $document = $handler->getDocument($id);

        $model = new DocumentShow($this->getDataClass(), $document, $this->getRouter());

        return $this->renderResponse(DocumentShow::TEMPLATE, array(
            'model' => $model
        ));
    }

    /**
     * @param Request   $request
     * @param string    $id
     * @return Response A Response instance
     *
     * @Route("/{id}/edit", name = Narmafzam\ArchiveBundle\Controller\Back\DocumentController::ROUTE__DOCUMENT_EDIT)
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, $id)
    {
        $handler = $this->getHandler();
        $document = $handler->getDocument($id);

        $form = $this->getUpdateForm($this->getFormTypeClass(), $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $handler->editDocument($document);

            return $this->redirectToRoute(self::ROUTE__DOCUMENT_SHOW, array('id' => $data->getId()));
        }

        $model = new DocumentEdit($form, $document);

        return $this->renderResponse(DocumentEdit::TEMPLATE, array(
            'model' => $model
        ));
    }

    /**
     * @Route("/{id}", name = Narmafzam\ArchiveBundle\Controller\Back\DocumentController::ROUTE__DOCUMENT_DELETE)
     * @Method("DELETE")
     */
    public function deleteAction()
    {

    }
}