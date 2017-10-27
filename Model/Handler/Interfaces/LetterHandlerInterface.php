<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Model\Handler\Interfaces;

use Narmafzam\ArchiveBundle\Entity\Interfaces\LetterInterface;

/**
 * Interface LetterHandlerInterface
 * @package Narmafzam\ArchiveBundle\Model\Handler\Interfaces
 */
interface LetterHandlerInterface extends HandlerInterface
{
    /**
     * @param LetterInterface $letter
     *
     * @return mixed
     */
    public function newLetter(LetterInterface $letter);

    /**
     * @param LetterInterface $letter
     *
     * @return mixed
     */
    public function editLetter(LetterInterface $letter);

    /**
     * @param string $id
     */
    public function getLetter($id);

    /**
     * @return mixed
     */
    public function getLetters();
}