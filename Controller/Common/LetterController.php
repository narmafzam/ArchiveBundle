<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/12
 */

namespace Narmafzam\ArchiveBundle\Controller\Common;

use Narmafzam\ArchiveBundle\Controller\BaseWithDataClassController;
use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\AttachableHandlerInterface;

class LetterController extends BaseWithDataClassController
{
    protected function getHandler(): AttachableHandlerInterface
    {
        return $this->handler;
    }
}