<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\ViewModel\Interfaces;

use Symfony\Component\Routing\RouterInterface;

interface IndexInterface
{
    public function __construct(string $dataClass, array $collection, RouterInterface $router);
}