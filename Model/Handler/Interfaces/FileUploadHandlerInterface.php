<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/30
 */

namespace Narmafzam\ArchiveBundle\Model\Handler\Interfaces;

use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Interface FileUploadHandlerInterface
 * @package Narmafzam\ArchiveBundle\Model\Handler\Interfaces
 */
interface FileUploadHandlerInterface
{
    /**
     * FileUploadHandlerInterface constructor.
     *
     * @param string $webDirectory
     */
    public function __construct(string $webDirectory);

    /**
     * @param UploadedFile $file
     *
     * @return string
     */
    public function upload(UploadedFile $file): string ;

    /**
     * @return array
     */
    public function getWebDirectory(): array ;

    /**
     * @return string
     */
    public function getUploadPath(): string ;
}