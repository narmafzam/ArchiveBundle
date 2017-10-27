<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/28
 */

namespace Narmafzam\ArchiveBundle\ViewModel\Back\Document;

use Narmafzam\ArchiveBundle\Controller\Back\DocumentController;
use Narmafzam\ArchiveBundle\ViewModel\Common\Document\DocumentIndex as BaseClass;

class DocumentIndex extends BaseClass
{
    public function getRouteShow()
    {
        return DocumentController::ROUTE__DOCUMENT_SHOW;
    }
}