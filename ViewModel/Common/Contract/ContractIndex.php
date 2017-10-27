<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\ViewModel\Common\Contract;

use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractInterface;
use Narmafzam\ArchiveBundle\ViewModel\BaseViewModel;
use Narmafzam\ArchiveBundle\ViewModel\Interfaces\ContractIndexInterface;
use Symfony\Component\Routing\RouterInterface;

class ContractIndex extends BaseViewModel implements ContractIndexInterface
{
    const TEMPLATE = '@NarmafzamArchive/Contract/index.html.twig';

    private $contracts;

    public function __construct(string $dataClass, array $contracts, RouterInterface $router)
    {
        parent::__construct($dataClass, $router);
        $this->contracts = $contracts;
    }

    public function getContracts()
    {
        return $this->contracts;
    }

}