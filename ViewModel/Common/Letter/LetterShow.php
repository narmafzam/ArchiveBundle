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
use Narmafzam\ArchiveBundle\ViewModel\Interfaces\LetterShowInterface;
use Symfony\Component\Routing\RouterInterface;

class LetterShow extends BaseViewModel implements LetterShowInterface
{
    const TEMPLATE = '@NarmafzamArchive/Letter/show.html.twig';

    private $letter;

    public function __construct(string $dataClass, LetterInterface $letter, RouterInterface $router)
    {
        parent::__construct($dataClass, $router);
        $this->letter = $letter;
    }

    public function getLetter()
    {
        return $this->letter;
    }

}