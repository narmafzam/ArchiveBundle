<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/30
 */

namespace Narmafzam\ArchiveBundle\Model\Handler;

use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\FileHandlerInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class FileHandler
 * @package Narmafzam\ArchiveBundle\Model\Handler
 */
class FileHandler implements FileHandlerInterface
{
    /**
     * @var string
     */
    protected $webDirectory;

    /**
     * @var string
     */
    protected $uploadPath;

    /**
     * FileHandler constructor.
     *
     * @param string $webDirectory
     * @param string $uploadPath
     */
    public function __construct(string $webDirectory, string $uploadPath)
    {
        $this->webDirectory = $webDirectory;
        $this->uploadPath = $uploadPath;
    }

    /**
     * @return string
     */
    public function getWebDirectory(): string
    {
        return $this->webDirectory;
    }

    /**
     * @return string
     */
    public function getUploadPath(): string
    {
        return $this->uploadPath;
    }

    /**
     * @param UploadedFile $file
     *
     * @return string
     */
    public function upload(UploadedFile $file): string
    {
        $guessedExtension = $file->guessExtension();
        $storedName       = md5(uniqid()) . '.' . $guessedExtension;

        $file->move($this->getWebDirectory() . $this->getUploadPath() , $storedName);

        return $storedName;
    }

    /**
     * @param string $filePathAndName
     *
     * @return File
     */
    public function download(string $filePathAndName): File
    {
        return new File($this->webDirectory . $filePathAndName);
    }
}