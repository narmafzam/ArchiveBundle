<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/12
 */

namespace Narmafzam\ArchiveBundle\Controller\Front;

use Narmafzam\ArchiveBundle\Controller\Common\LetterController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class LetterController
 * @package Narmafzam\ArchiveBundle\Controller\Front
 * @Route("/letter", name="front_letter")
 */
class LetterController extends BaseController
{
    /**
     * @Route("/", name="front_letter_index")
     * @Method("GET")
     */
    public function indexAction()
    {

    }

    /**
     * @Route("/new", name="front_letter_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $form = $this->getAddForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();
            $handler = $this->getHandler();
            $handler->newLetter($data);
        }

        return $this->render('@NarmafzamArchive/Letter/new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/{id}/edit", name="front_letter_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request)
    {
        $form = $this->getUpdateForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();
            $handler = $this->getHandler();
            $handler->editLetter($data);
        }

        return $this->render('@NarmafzamArchive/Letter/new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/{id}", name="front_letter_delete")
     * @Method("DELETE")
     */
    public function deleteAction()
    {

    }
}