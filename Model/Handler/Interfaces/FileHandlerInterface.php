<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/30
 */

namespace Narmafzam\ArchiveBundle\Model\Handler\Interfaces;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Interface FileHandlerInterface
 * @package Narmafzam\ArchiveBundle\Model\AttachableHandler\Interfaces
 */
interface FileHandlerInterface
{
    /**
     * FileHandlerInterface constructor.
     *
     * @param string $webDirectory
     * @param string $uploadPath
     */
    public function __construct(string $webDirectory, string $uploadPath);

    /**
     * @param UploadedFile $file
     *
     * @return string
     */
    public function upload(UploadedFile $file): string ;

    /**
     * @param string $filePathAndName
     *
     * @return File
     */
    public function download(string $filePathAndName): File ;

    /**
     * @return string
     */
    public function getWebDirectory(): string ;

    /**
     * @return string
     */
    public function getUploadPath(): string ;
}