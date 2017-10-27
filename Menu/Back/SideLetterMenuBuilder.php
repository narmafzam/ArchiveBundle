<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\Menu\Back;

use Narmafzam\ArchiveBundle\Controller\Back\LetterController;

class SideLetterMenuBuilder extends SideMenuBuilder
{
    public function createSideLetterMenu(array $options)
    {
        $menu = $this->createSideMenu($options);

        $menu
            ->addChild('archive.letter.action.index', array(
                'route' => LetterController::ROUTE__LETTER_INDEX
            ));
        $menu
            ->addChild('archive.letter.action.new', array(
                'route' => LetterController::ROUTE__LETTER_NEW
            ));

        return $menu;
    }
}