<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/30
 */

namespace Narmafzam\ArchiveBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface;
use Narmafzam\ArchiveBundle\Model\Handler\FileUploadHandler;
use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\FileUploadHandlerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class AttachmentFileUploadEventListener
 * @package Narmafzam\ArchiveBundle\EventListener
 */
class AttachmentFileUploadEventListener
{
    /**
     * @var FileUploadHandler
     */
    protected $fileUploadHandler;

    /**
     * AttachmentFileUploadEventListener constructor.
     *
     * @param FileUploadHandlerInterface $fileUploadHandler
     */
    public function __construct(FileUploadHandlerInterface $fileUploadHandler)
    {
        $this->fileUploadHandler = $fileUploadHandler;
    }

    /**
     * @return FileUploadHandlerInterface
     */
    public function getFileUploadHandler(): FileUploadHandlerInterface
    {
        return $this->fileUploadHandler;
    }

    /**
     * @param LifecycleEventArgs $args
     *
     * @throws \Exception
     */
    public function prePersist(LifecycleEventArgs $args)
    {
        $attachment = $args->getEntity();

        if ($attachment instanceof AttachmentInterface) {

            $this->uploadAttachmentFile($attachment);
        }

    }

    /**
     * @param PreUpdateEventArgs $args
     *
     * @throws \Exception
     */
    public function preUpdate(PreUpdateEventArgs $args)
    {
        $attachment = $args->getEntity();

        if ($attachment instanceof AttachmentInterface) {

            $this->uploadAttachmentFile($attachment);
        }

    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function postLoad(LifecycleEventArgs $args)
    {
        $attachment = $args->getEntity();

        if ($attachment instanceof AttachmentInterface) {

            if ($filePath = $attachment->getBrochure()) {

                $file = $this->getFileUploadHandler()->download($filePath);
                $attachment->setFile($file);
            }
        }

    }

    /**
     * @param AttachmentInterface $attachment
     */
    private function uploadAttachmentFile(AttachmentInterface $attachment)
    {
        $file = $attachment->getFile();

        if ($file instanceof UploadedFile) {

            $originalName     = $file->getClientOriginalName();
            $guessedMime      = $file->getMimeType();
            $fileName         = $this->getFileUploadHandler()->upload($file);
            $path             = $this->getFileUploadHandler()->getUploadPath();

            $attachment->setFile($fileName);
            $attachment->setFileName($originalName);
            $attachment->setTitle($originalName);
            $attachment->setPath($path);
            $attachment->setMime($guessedMime);

        }
    }
}