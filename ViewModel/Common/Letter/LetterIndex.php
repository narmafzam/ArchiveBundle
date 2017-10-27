<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\ViewModel\Common\Letter;

use Narmafzam\ArchiveBundle\Entity\Interfaces\LetterInterface;
use Narmafzam\ArchiveBundle\ViewModel\BaseViewModel;
use Narmafzam\ArchiveBundle\ViewModel\Interfaces\LetterIndexInterface;
use Symfony\Component\Routing\RouterInterface;

class LetterIndex extends BaseViewModel implements LetterIndexInterface
{
    const TEMPLATE = '@NarmafzamArchive/Letter/index.html.twig';

    private $letters;

    public function __construct(string $dataClass, array $letters, RouterInterface $router)
    {
        parent::__construct($dataClass, $router);
        $this->letters = $letters;
    }

    public function getLetters()
    {
        return $this->letters;
    }

}