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
use Narmafzam\ArchiveBundle\Model\Handler\FileHandler;
use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\FileHandlerInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class AttachmentFileEventListener
 * @package Narmafzam\ArchiveBundle\EventListener
 */
class AttachmentFileEventListener
{
    /**
     * @var FileHandler
     */
    protected $fileHandler;

    /**
     * AttachmentFileEventListener constructor.
     *
     * @param FileHandlerInterface $fileHandler
     */
    public function __construct(FileHandlerInterface $fileHandler)
    {
        $this->fileHandler = $fileHandler;
    }

    /**
     * @return FileHandlerInterface
     */
    public function getFileHandler(): FileHandlerInterface
    {
        return $this->fileHandler;
    }

    /**
     * @param LifecycleEventArgs $args
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

            $this->downloadAttachmentFile($attachment);
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
            $fileName         = $this->getFileHandler()->upload($file);
            $path             = $this->getFileHandler()->getUploadPath();

            $attachment->setFile($fileName);
            $attachment->setFileName($originalName);
            $attachment->setTitle($originalName);
            $attachment->setPath($path);
            $attachment->setMime($guessedMime);
        } elseif ($file instanceof File) {

            $attachment->setFile($file->getBasename());
        }
    }

    /**
     * @param AttachmentInterface $attachment
     */
    private function downloadAttachmentFile(AttachmentInterface $attachment)
    {
        $fileName = $attachment->getFile();
        $filePath = $attachment->getPath();

        $file = $this->getFileHandler()->download($filePath . '/' . $fileName);
        $attachment->setFile($file);
    }
}