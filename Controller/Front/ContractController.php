<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 1:29 PM
 */

namespace Narmafzam\ArchiveBundle\Controller\Front;

use Narmafzam\ArchiveBundle\Controller\Common\ContractController as BaseController;
use Narmafzam\ArchiveBundle\Entity\Contract;
use Narmafzam\ArchiveBundle\Form\ContractType;
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
    /**
     * @Route("/", name="front_contract_index")
     * @Method("GET")
     */
    public function indexAction()
    {

    }

    /**
     * @Route("/new", "front_contract_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $contract = new Contract();
        $form = $this->createForm(ContractType::class, $contract);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contract);
            $em->flush();
        }

        return $this->render('', array());
    }

    /**
     * @Route("/{id}/edit", name="front_contract_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction()
    {

    }

    /**
     * @Route("/{id}", name="front_contract_delete")
     * @Method({"DELETE"})
     */
    public function deleteAction()
    {

    }
}