<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/30
 */

namespace Narmafzam\ArchiveBundle\Model\Handler;

use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\FileUploadHandlerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ContractAttachmentFileUploader extends FileUploadHandler implements FileUploadHandlerInterface
{
    protected $uploadPath;

    /**
     * ContractAttachmentFileUploader constructor.
     *
     * @param string $webDirectory
     * @param        $uploadPath
     */
    public function __construct($webDirectory, $uploadPath)
    {
        parent::__construct($webDirectory);

        $this->uploadPath = $uploadPath;
    }

    /**
     * @return string
     */
    public function getUploadPath(): string
    {
        return $this->uploadPath;
    }

    public function upload(UploadedFile $file): string
    {
        parent::upload($file);

        $attachment->setFile($path . '/' . $storedName);
        $attachment->setFileName($originalName);
        $attachment->setTitle($originalName);
        $attachment->setPath($path);
        $attachment->setMime($guessedMime);
    }

}