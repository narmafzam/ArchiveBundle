<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Controller\Back;

use Narmafzam\ArchiveBundle\Controller\Common\DocumentController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DocumentController
 * @package Narmafzam\ArchiveBundle\Controller\Back
 * @Route("/document", name="back_document")
 */
class DocumentController extends BaseController
{
    /**
     * @Route("/", name="""back_document_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('NarmafzamArchiveBundle:Document:index.html.twig');
    }

    /**
     * @param Request   $request
     * @return Response A Response instance
     *
     * @Route("/new", name="back_document_new")
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
        }

        return $this->render('@NarmafzamArchive/Document/new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @param Request   $request
     * @param string    $id
     * @return Response A Response instance
     *
     * @Route("/{id}/edit", name="""back_document_edit")
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
        }

        return $this->render('@NarmafzamArchive/Document/new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/{id}", name="""back_document_delete")
     * @Method("DELETE")
     */
    public function deleteAction()
    {

    }
}