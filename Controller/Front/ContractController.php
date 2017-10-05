<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/5/17
 * Time: 1:29 PM
 */

namespace Narmafzam\ArchiveBundle\Controller\Front;

use Narmafzam\ArchiveBundle\Controller\Common\ContractController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class ContractController
 * @package Narmafzam\ArchiveBundle\Controller
 * @Route('/contract', 'front_contract')
 */
class ContractController extends BaseController
{
    /**
     * @Route('/', 'front_contract_list')
     */
    public function listAction()
    {

    }

    /**
     * @Route('/new', 'front_contract_new')
     */
    public function newAction()
    {

    }

    /**
     * @Route('/edit', 'front_contract_edit')
     */
    public function editAction()
    {

    }

    /**
     * @Route('/delete', 'front_contract_delete')
     */
    public function deleteAction()
    {

    }
}