<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Controller\Common;

use Narmafzam\ArchiveBundle\Controller\BaseController;
use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\ContractHandlerInterface;

class ContractController extends BaseController
{
    protected function getHandler(): ContractHandlerInterface
    {
        return $this->handler;
    }
}