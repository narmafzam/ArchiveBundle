<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Controller\Front;

use Narmafzam\ArchiveBundle\Controller\Common\ContractController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method as Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ContractController
 * @package Narmafzam\ArchiveBundle\Controller
 * @Route("/contract", name="front_contract")
 * @Method("GET")
 */
class ContractController extends BaseController
{
//    /**
//     * @Route("/", name="front_contract_index")
//     * @Method("GET")
//     */
//    public function indexAction()
//    {
//
//    }
//
    /**
     * @Route("/new", name="front_contract_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $form = $this->createForm($this->getFormTypeClass());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // TODO: Insert new Contract record
        }

        return $this->render('@NarmafzamArchive/Contract/new.html.twig', array(
            'form' => $form->createView()
        ));
    }
//
//    /**
//     * @Route("/{id}/edit", name="front_contract_edit")
//     * @Method({"GET", "POST"})
//     */
//    public function editAction()
//    {
//
//    }
//
//    /**
//     * @Route("/{id}", name="front_contract_delete")
//     * @Method({"DELETE"})
//     */
//    public function deleteAction()
//    {
//
//    }
}