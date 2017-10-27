<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\ViewModel\Front\Contract;

use Narmafzam\ArchiveBundle\Controller\Front\ContractController;
use Narmafzam\ArchiveBundle\ViewModel\Common\Contract\ContractIndex as BaseClass;

class ContractIndex extends BaseClass
{
    public function getRouteShow()
    {
        return ContractController::ROUTE__CONTRACT_SHOW;
    }
}