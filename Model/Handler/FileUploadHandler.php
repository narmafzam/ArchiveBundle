<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/30
 */

namespace Narmafzam\ArchiveBundle\Model\Handler;

use Symfony\Component\HttpFoundation\File\UploadedFile;

abstract class FileUploadHandler
{
    protected $webDirectory;

    /**
     * FileUploadHandler constructor.
     *
     * @param $webDirectory
     */
    public function __construct($webDirectory)
    {
        $this->webDirectory = $webDirectory;
    }

    public function upload(UploadedFile $file): string
    {
        $guessedExtension = $file->guessExtension();
        $guessedMime      = $file->getMimeType();
        $originalName     = $file->getClientOriginalName();
        $storedName       = md5(uniqid()) . '.' . $guessedExtension;

        $file->move($this->getWebDirectory() . $path , $storedName);

        return $storedName;
    }

    /**
     * @return string
     */
    public function getWebDirectory(): string
    {
        return $this->webDirectory;
    }

}