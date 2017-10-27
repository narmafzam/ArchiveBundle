<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/28
 */

namespace Narmafzam\ArchiveBundle\ViewModel\Interfaces;

use Narmafzam\ArchiveBundle\Entity\Interfaces\LetterInterface;
use Symfony\Component\Routing\RouterInterface;

interface LetterShowInterface extends ShowInterface
{
    public function __construct(string $dataClass, LetterInterface $letter, RouterInterface $router);
}