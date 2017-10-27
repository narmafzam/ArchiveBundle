<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/28
 */

namespace Narmafzam\ArchiveBundle\ViewModel\Back\Letter;

use Narmafzam\ArchiveBundle\Controller\Back\LetterController;
use Narmafzam\ArchiveBundle\ViewModel\Common\Letter\LetterIndex as BaseClass;

class LetterIndex extends BaseClass
{
    public function getRouteShow()
    {
        return LetterController::ROUTE__LETTER_SHOW;
    }
}