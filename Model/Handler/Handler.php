<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/18
 */

namespace Narmafzam\ArchiveBundle\Model\Handler;

use Doctrine\ORM\EntityManagerInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\AttachableInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface;
use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\HandlerInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class Handler
 * @package Narmafzam\ArchiveBundle\Model\Handler
 */
class Handler implements HandlerInterface
{
    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @var string
     */
    protected $dataClass;

    /**
     * @var string
     */
    protected $webDirectory;

    /**
     * Handler constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param string                 $dataClass
     * @param string                 $webDirectory
     */
    public function __construct(EntityManagerInterface $entityManager, string $dataClass, string $webDirectory)
    {
        $this->entityManager = $entityManager;
        $this->dataClass = $dataClass;
        $this->webDirectory = $webDirectory;
    }

    /**
     * @return EntityManagerInterface
     */
    public function getEntityManager(): EntityManagerInterface
    {
        return $this->entityManager;
    }

    /**
     * @return string
     */
    public function getDataClass(): string
    {
        return $this->dataClass;
    }

    /**
     * @return string
     */
    public function getWebDirectory(): string
    {
        return $this->webDirectory;
    }

    /**
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    public function getRepository()
    {
        return $this->getEntityManager()->getRepository($this->getDataClass());
    }

    /**
     * @param AttachableInterface $attachable
     *
     * @return AttachableInterface
     * @throws \Exception
     */
    public function storeAttachments(AttachableInterface $attachable, string $path)
    {
        foreach ($attachable->getAttachments() as $attachment) {

            if (!$attachment instanceof AttachmentInterface) {

                throw new \Exception(
                    sprintf(
                        "AttachableInterface:getAttachments should return ArrayCollection of AttachmentInterface, %s given",
                        is_object($attachment) ? get_class($attachment) : gettype($attachment)
                    )
                );
            }

            $file = $attachment->getLocation();

            if (!$file instanceof UploadedFile) {

                throw new \Exception(
                    sprintf(
                        "AttachmentInterface:getLocation should return instance of UploadedFile, %s given",
                        is_object($file) ? get_class($file) : gettype($file)
                    )
                );
            }

            $guessedExtension = $file->guessExtension();
            $guessedMime = $file->getMimeType();

            $fileOriginalName = $file->getClientOriginalName();
            $fileFullName = md5(uniqid()) . '.' . $guessedExtension;

            $file->move($this->getWebDirectory() . $path , $fileFullName);

            $attachment->setTitle($fileOriginalName);
            $attachment->setLocation($path . '/' . $fileFullName);
            $attachment->setPath($path);
            $attachment->setMime($guessedMime);
        }

    }

    public function retrieveAttachments(AttachableInterface $attachable)
    {
        foreach ($attachable->getAttachments() as &$attachment) {

            if (!$attachment instanceof AttachmentInterface) {

                throw new \Exception(
                    sprintf(
                        "AttachableInterface:getAttachments should return ArrayCollection of AttachmentInterface, %s given",
                        is_object($attachment) ? get_class($attachment) : gettype($attachment)
                    )
                );
            }

            $fileLocation = $attachment->getLocation();
            $attachment->setLocation(
                new File($this->getWebDirectory() . '/' . $fileLocation)
            );
        }
    }
}