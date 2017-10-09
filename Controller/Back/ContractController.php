<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Controller\Back;

use Narmafzam\ArchiveBundle\Controller\Common\ContractController as BaseController;
use Narmafzam\ArchiveBundle\Entity\Contract;
use Narmafzam\ArchiveBundle\Form\Back\ContractType;
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
     * @Route("/", name="back_contract_list")
     */
    public function listAction()
    {

    }

    /**
     * @Route("/new", name="back_contract_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, ContractType $contractType)
    {
        $form = $this->createForm($contractType->getFQCN());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // TODO: Insert new Contract record
        }

        return $this->render('@NarmafzamArchive/Contract/new.html.twig', array(
            'form' => $form->createView()
        ));

    }

    /**
     * @Route("/edit", name="back_contract_edit")
     */
    public function editAction()
    {

    }

    /**
     * @Route("/delete", name="back_contract_delete")
     */
    public function deleteAction()
    {

    }
}