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
     * Handler constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param string                 $dataClass
     * @param string                 $uploadDirectory
     */
    public function __construct(EntityManagerInterface $entityManager, string $dataClass)
    {
        $this->entityManager = $entityManager;
        $this->dataClass = $dataClass;
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
    public function storeAttachments(AttachableInterface $attachable, string $uploadDirectory): AttachableInterface
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

            $mimeExtension = $file->guessExtension();

            $originalFineName = $file->getClientOriginalName();
            $fileName = md5($originalFineName) . '.' . $mimeExtension;

            $file->move($uploadDirectory, $fileName);

            $attachment->setTitle($originalFineName);
            $attachment->setLocation($fileName);
            $attachment->setMime($mimeExtension);
        }

        return $attachable;
    }

    public function retrieveAttachments(AttachableInterface $attachable, string $uploadDirectory)
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
                new File($uploadDirectory . '/' . $fileLocation)
            );
        }
    }
}