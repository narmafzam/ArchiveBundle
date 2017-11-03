<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Model\Handler;

use Narmafzam\ArchiveBundle\Entity\Interfaces\LetterInterface;
use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\LetterHandlerInterface;

/**
 * Class LetterHandler
 * @package Narmafzam\ArchiveBundle\Model\AttachableHandler
 */
class LetterHandler extends AttachableHandler implements LetterHandlerInterface
{
    /**
     * @param LetterInterface $letter
     * @return $this
     */
    public function newLetter(LetterInterface $letter)
    {
        $this->getEntityManager()->persist($letter);
        $this->getEntityManager()->flush();

        return $this;
    }

    /**
     * @param LetterInterface $letter
     * @return $this
     */
    public function editLetter(LetterInterface $letter)
    {
        $this->getEntityManager()->flush();

        return $this;
    }

    /**
     * @param string $id
     * @return null|object
     */
    public function getLetter($id)
    {
        $letter = $this->getRepository()->find($id);

        return $letter;
    }

    /**
     * @return array
     */
    public function getLetters()
    {
        return $this->getRepository()->findAll();
    }

}