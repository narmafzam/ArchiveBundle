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
use Symfony\Component\HttpFoundation\Response;

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
        return $this->render('NarmafzamArchiveBundle:Letter:index.html.twig');
    }

    /**
     * @param Request   $request
     * @return Response A Response instance
     *
     * @Route("/new", name="front_letter_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $form = $this->getAddForm($this->getFormTypeClass());
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
     * @param Request   $request
     * @param string    $id
     * @return Response A Response instance
     *
     * @Route("/{id}/edit", name="front_letter_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, $id)
    {
        $handler = $this->getHandler();
        $letter = $handler->getLetter($id);

        $form = $this->getUpdateForm($this->getFormTypeClass(), $letter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $handler->editLetter($letter);
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