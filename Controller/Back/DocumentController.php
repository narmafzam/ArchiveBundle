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

    }

    /**
     * @Route("/new", name="back_document_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $form = $this->getAddForm();
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
     * @Route("/{id}/edit", name="""back_document_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request)
    {
        $form = $this->getUpdateForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();
            $handler = $this->getHandler();
            $handler->editDocument($data);
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