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
    protected $uploadDirectory;

    /**
     * Handler constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param string                 $uploadDirectory
     */
    public function __construct(EntityManagerInterface $entityManager, $uploadDirectory)
    {
        $this->entityManager = $entityManager;
        $this->uploadDirectory = $uploadDirectory;
    }

    /**
     * @return EntityManagerInterface
     */
    protected function getEntityManager()
    {
        return $this->entityManager;
    }

    /**
     * @return string
     */
    public function getUploadDirectory(): string
    {
        return $this->uploadDirectory;
    }

    /**
     * @param AttachableInterface $attachable
     *
     * @return AttachableInterface
     * @throws \Exception
     */
    public function storeAttachments(AttachableInterface $attachable) : AttachableInterface
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

            $originalFineName = $file->getClientOriginalName();
            $fileName = md5($originalFineName) . '.' . $file->guessExtension();

            $file->move(
                $this->getUploadDirectory() . '/attachments',
                $fileName
            );

            $attachment->setTitle($originalFineName);
            $attachment->setLocation($fileName);
        }

        return $attachable;
    }
}