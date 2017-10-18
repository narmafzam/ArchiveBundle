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
     * @Route("/", name="""back_document_list")
     */
    public function listAction()
    {

    }

    /**
     * @Route("/new", name="back_document_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $dataClass = $this->getDataClass();
        $document = new $dataClass;

        $form = $this->getAddForm($document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // TODO: Insert new Document record
        }

        return $this->render('@NarmafzamArchive/Document/new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/edit", name="""back_document_edit")
     */
    public function editAction()
    {

    }

    /**
     * @Route("/delete", name="""back_document_delete")
     */
    public function deleteAction()
    {

    }
}