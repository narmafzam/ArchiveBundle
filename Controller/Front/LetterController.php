<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/12
 */

namespace Narmafzam\ArchiveBundle\Controller\Front;

use Narmafzam\ArchiveBundle\Controller\Common\LetterController as BaseController;
use Narmafzam\ArchiveBundle\ViewModel\Front\Letter\LetterEdit;
use Narmafzam\ArchiveBundle\ViewModel\Front\Letter\LetterIndex;
use Narmafzam\ArchiveBundle\ViewModel\Front\Letter\LetterNew;
use Narmafzam\ArchiveBundle\ViewModel\Front\Letter\LetterShow;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class LetterController
 * @package Narmafzam\ArchiveBundle\Controller\Front
 * @Route("/letter")
 */
class LetterController extends BaseController
{
    const ROUTE__LETTER_INDEX  = 'front_letter_index';
    const ROUTE__LETTER_SHOW   = 'front_letter_show';
    const ROUTE__LETTER_NEW    = 'front_letter_new';
    const ROUTE__LETTER_EDIT   = 'front_letter_edit';
    const ROUTE__LETTER_DELETE = 'front_letter_delete';

    /**
     * @Route("", name = Narmafzam\ArchiveBundle\Controller\Front\LetterController::ROUTE__LETTER_INDEX)
     * @Method("GET")
     */
    public function indexAction()
    {
        $handler = $this->getHandler();
        $letters = $handler->getLetters();

        $model = new LetterIndex($this->getDataClass(), $letters, $this->getRouter());

        return $this->renderResponse(LetterIndex::TEMPLATE, array(
            'model' => $model
        ));
    }

    /**
     * @param Request   $request
     * @return Response A Response instance
     *
     * @Route("/new", name = Narmafzam\ArchiveBundle\Controller\Front\LetterController::ROUTE__LETTER_NEW)
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

            return $this->redirectToRoute(self::ROUTE__LETTER_SHOW, array('id' => $data->getId()));
        }

        $model = new LetterNew($form);

        return $this->renderResponse(LetterNew::TEMPLATE, array(
            'model' => $model
        ));
    }

    /**
     * @Route("/{id}", name = Narmafzam\ArchiveBundle\Controller\Back\LetterController::ROUTE__LETTER_SHOW)
     * @Method("GET")
     */
    public function showAction(Request $request, $id)
    {
        $handler = $this->getHandler();
        $letter = $handler->getLetter($id);

        $model = new LetterShow($this->getDataClass(), $letter, $this->getRouter());

        return $this->renderResponse(LetterShow::TEMPLATE, array(
            'model' => $model
        ));
    }

    /**
     * @param Request   $request
     * @param string    $id
     * @return Response A Response instance
     *
     * @Route("/{id}/edit", name = Narmafzam\ArchiveBundle\Controller\Front\LetterController::ROUTE__LETTER_EDIT)
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

            return $this->redirectToRoute(self::ROUTE__LETTER_SHOW, array('id' => $data->getId()));
        }

        $model = new LetterEdit($form, $letter);

        return $this->renderResponse(LetterEdit::TEMPLATE, array(
            'model' => $model
        ));
    }

    /**
     * @Route("/{id}", name = Narmafzam\ArchiveBundle\Controller\Front\LetterController::ROUTE__LETTER_DELETE)
     * @Method("DELETE")
     */
    public function deleteAction()
    {

    }
}