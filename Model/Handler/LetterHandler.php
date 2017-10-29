<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Model\Handler;

use Doctrine\ORM\EntityManagerInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\LetterInterface;
use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\LetterHandlerInterface;

/**
 * Class LetterHandler
 * @package Narmafzam\ArchiveBundle\Model\Handler
 */
class LetterHandler extends Handler implements LetterHandlerInterface
{
    /**
     * @var string
     */
    protected $uploadPath;

    /**
     * LetterHandler constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param string                 $dataClass
     * @param string                 $webDirectory
     * @param string                 $uploadPath
     */
    public function __construct(EntityManagerInterface $entityManager, string $dataClass, string $webDirectory, string $uploadPath)
    {
        parent::__construct($entityManager, $dataClass, $webDirectory);

        $this->uploadPath = $uploadPath;
    }

    /**
     * @return string
     */
    public function getUploadPath(): string
    {
        return $this->uploadPath;
    }

    /**
     * @param LetterInterface $letter
     * @return true
     */
    public function newLetter(LetterInterface $letter)
    {
        $this->storeLetterAttachments($letter);
        $this->getEntityManager()->persist($letter);
        $this->getEntityManager()->flush();

        return true;
    }

    /**
     * @param LetterInterface $letter
     * @return true
     */
    public function editLetter(LetterInterface $letter)
    {
        $this->getEntityManager()->persist($letter);
        $this->getEntityManager()->flush();

        return true;
    }

    /**
     * @param string $id
     * @return null|object
     */
    public function getLetter($id)
    {
        $letter = $this->getRepository()->find($id);
        $this->retrieveLetterAttachments($letter);

        return $letter;
    }

    /**
     * @return array
     */
    public function getLetters()
    {
        return $this->getRepository()->findAll();
    }

    /**
     * @param LetterInterface $letter
     *
     * @return LetterInterface
     */
    public function storeLetterAttachments(LetterInterface $letter): LetterInterface
    {
        parent::storeAttachments($letter, $this->getUploadPath());
    }

    /**
     * @param LetterInterface $letter
     */
    public function retrieveLetterAttachments(LetterInterface $letter)
    {
        parent::retrieveAttachments($letter);
    }

}