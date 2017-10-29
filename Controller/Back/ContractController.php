<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Controller\Back;

use Narmafzam\ArchiveBundle\Controller\Common\ContractController as BaseController;
use Narmafzam\ArchiveBundle\ViewModel\Back\Contract\ContractEdit;
use Narmafzam\ArchiveBundle\ViewModel\Back\Contract\ContractIndex;
use Narmafzam\ArchiveBundle\ViewModel\Back\Contract\ContractNew;
use Narmafzam\ArchiveBundle\ViewModel\Back\Contract\ContractShow;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ContractController
 * @package Narmafzam\ArchiveBundle\Controller
 * @Route("/contract")
 */
class ContractController extends BaseController
{
    const ROUTE__CONTRACT_INDEX  = 'back_contract_index';
    const ROUTE__CONTRACT_SHOW   = 'back_contract_show';
    const ROUTE__CONTRACT_NEW    = 'back_contract_new';
    const ROUTE__CONTRACT_EDIT   = 'back_contract_edit';
    const ROUTE__CONTRACT_DELETE = 'back_contract_delete';

    /**
     * @Route("", name = Narmafzam\ArchiveBundle\Controller\Back\ContractController::ROUTE__CONTRACT_INDEX)
     * @Method("GET")
     */
    public function indexAction()
    {
        $handler = $this->getHandler();
        $contracts = $handler->getContracts();

        $model = new ContractIndex($this->getDataClass(), $contracts, $this->getRouter());

        return $this->renderResponse(ContractIndex::TEMPLATE, array(
            'model' => $model
        ));
    }

    /**
     * @param Request   $request
     * @return Response A Response instance
     *
     * @Route("/new", name = Narmafzam\ArchiveBundle\Controller\Back\ContractController::ROUTE__CONTRACT_NEW)
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

            return $this->redirectToRoute(self::ROUTE__CONTRACT_SHOW, array('id' => $data->getId()));
        }

        $model = new ContractNew($form);

        return $this->renderResponse(ContractNew::TEMPLATE, array(
            'model' => $model
        ));
    }

    /**
     * @Route("/{id}", name = Narmafzam\ArchiveBundle\Controller\Back\ContractController::ROUTE__CONTRACT_SHOW)
     * @Method("GET")
     */
    public function showAction(Request $request, $id)
    {
        $handler = $this->getHandler();
        $contract = $handler->getContract($id);

        $model = new ContractShow($this->getDataClass(), $contract, $this->getRouter());

        return $this->renderResponse(ContractShow::TEMPLATE, array(
            'model' => $model
        ));
    }

    /**
     * @param Request   $request
     * @param string    $id
     * @return Response A Response instance
     *
     * @Route("/{id}/edit", name = Narmafzam\ArchiveBundle\Controller\Back\ContractController::ROUTE__CONTRACT_EDIT)
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

            return $this->redirectToRoute(self::ROUTE__CONTRACT_SHOW, array('id' => $data->getId()));
        }

        $model = new ContractEdit($form, $contract);

        return $this->renderResponse(ContractEdit::TEMPLATE, array(
            'model' => $model
        ));
    }

    /**
     * @Route("/{id}", name = Narmafzam\ArchiveBundle\Controller\Back\ContractController::ROUTE__CONTRACT_DELETE)
     * @Method("DELETE")
     */
    public function deleteAction()
    {

    }
}