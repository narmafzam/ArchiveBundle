<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Controller\Back;

use Narmafzam\ArchiveBundle\Controller\Common\ContractController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ContractController
 * @package Narmafzam\ArchiveBundle\Controller
 * @Route("/contract", name="back_contract")
 */
class ContractController extends BaseController
{
    /**
     * @Route("/", name="back_contract_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('@NarmafzamArchive/Contract/index.html.twig');
    }

    /**
     * @param Request   $request
     * @return Response A Response instance
     *
     * @Route("/new", name="back_contract_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $form = $this->getAddForm($this->getFormTypeClass());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();
            $handler = $this->getHandler();
            $handler->newContract($data);
        }

        return $this->render('@NarmafzamArchive/Contract/new.html.twig', array(
            'form' => $form->createView()
        ));

    }

    /**
     * @param Request   $request
     * @param string    $id
     * @return Response A Response instance
     *
     * @Route("/{id}/edit", name="back_contract_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, $id)
    {
        $handler = $this->getHandler();
        $contract = $handler->getContract($id);

        $form = $this->getUpdateForm($this->getFormTypeClass(), $contract);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $handler->editContract($contract);
        }

        return $this->render('@NarmafzamArchive/Contract/new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/{id}", name="back_contract_delete")
     * @Method("DELETE")
     */
    public function deleteAction()
    {

    }
}