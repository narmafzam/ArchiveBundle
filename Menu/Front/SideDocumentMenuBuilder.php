<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\Menu\Front;

use Narmafzam\ArchiveBundle\Controller\Front\DocumentController;

class SideDocumentMenuBuilder extends SideMenuBuilder
{
    public function createSideDocumentMenu(array $options)
    {
        $menu = $this->createSideMenu($options);

        $menu
            ->addChild('archive.document.action.index', array(
                'route' => DocumentController::ROUTE__DOCUMENT_INDEX
            ));
        $menu
            ->addChild('archive.document.action.new', array(
                'route' => DocumentController::ROUTE__DOCUMENT_NEW
            ));

        return $menu;
    }
}