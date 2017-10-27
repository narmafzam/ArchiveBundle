<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\Menu\Front;

use Narmafzam\ArchiveBundle\Controller\Front\ContractController;

class SideContractMenuBuilder extends SideMenuBuilder
{
    public function createSideContractMenu(array $options)
    {
        $menu = $this->createSideMenu($options);

        $menu
            ->addChild('archive.contract.action.index', array(
                'route' => ContractController::ROUTE__CONTRACT_INDEX
            ));
        $menu
            ->addChild('archive.contract.action.new', array(
                'route' => ContractController::ROUTE__CONTRACT_NEW
            ));

        return $menu;
    }
}