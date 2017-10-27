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
use Narmafzam\ArchiveBundle\ViewModel\Interfaces\ContractShowInterface;
use Symfony\Component\Routing\RouterInterface;

class ContractShow extends BaseViewModel implements ContractShowInterface
{
    const TEMPLATE = '@NarmafzamArchive/Contract/show.html.twig';

    private $contract;

    public function __construct(string $dataClass, ContractInterface $contract, RouterInterface $router)
    {
        parent::__construct($dataClass, $router);
        $this->contract = $contract;
    }

    public function getContract()
    {
        return $this->contract;
    }

}