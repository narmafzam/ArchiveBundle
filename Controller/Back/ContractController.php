<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Controller\Back;

use Narmafzam\ArchiveBundle\Controller\Common\ContractController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class ContractController
 * @package Narmafzam\ArchiveBundle\Controller
 * @Route('/contract', 'back_contract')
 */
class ContractController extends BaseController
{
    /**
     * @Route('/', 'back_contract_list')
     */
    public function listAction()
    {

    }

    /**
     * @Route('/new', 'back_contract_new')
     */
    public function newAction()
    {

    }

    /**
     * @Route('/edit', 'back_contract_edit')
     */
    public function editAction()
    {

    }

    /**
     * @Route('/delete', 'back_contract_delete')
     */
    public function deleteAction()
    {

    }
}