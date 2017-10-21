<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Controller\Front;

use Narmafzam\ArchiveBundle\Controller\Common\DocumentController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DocumentController
 * @package Narmafzam\ArchiveBundle\Controller\Front
 * @Route("/document", name="front_document")
 */
class DocumentController extends BaseController
{
    /**
     * @Route("/", name="front_document_index")
     */
    public function indexAction()
    {

    }

    /**
     * @Route("/new", name="front_document_new")
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
     * @Route("/{id}/edit", name="front_document_edit")
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
     * @Route("/{id}", name="front_document_delete")
     */
    public function deleteAction()
    {

    }
}