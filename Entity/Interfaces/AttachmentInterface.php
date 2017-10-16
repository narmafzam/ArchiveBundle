<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/14
 */

namespace Narmafzam\ArchiveBundle\Entity\Interfaces;

interface AttachmentInterface
{
    const FILE_MAX_SIZE = '1024k';
    const MIME_BMP = "image/bmp";
    const MIME_JPG = "image/jpeg";
    const MIME_GIF = "image/gif";
    const MIME_PNG = "image/png";
    const MIME_SVG = "image/svg+xml";
    const MIME_TIFF = "image/tiff";
    const MIME_PSD = "image/vnd.adobe.photoshop";
    const MIME_DWG = "image/vnd.dwg";
    const MIME_WAV = "audio/x-wav";
    const MIME_MP3 = "audio/mpeg3";
    const MIME_AVI = "video/x-msvideo";
    const MIME_MPEG = "video/mpeg";
    const MIME_HTML = "text/html";
    const MIME_7Z = "application/x-7z-compressed";
    const MIME_XML = "application/xml";
    const MIME_PDF = "application/pdf";
    const MIME_DOC = "application/msword";
    const MIME_XLS = "application/vnd.ms-excel";
    const MIME_PPT = "application/vnd.ms-powerpoint";
    const MIME_MDB = "application/vnd.ms-access";
    const MIME_ZIP = "application/zip";
    const MIME_RAR = "application/x-rar-compressed";
    const MIME_DOCX = "application/vnd.openxmlformats-officedocument.wordprocessingml.document";
    const MIME_XLSX = "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet";
    const MIME_PPTX = "application/vnd.openxmlformats-officedocument.presentationml.presentation";

    public function getLocation();

    public function setLocation($location);

    public function getTitle();

    public function setTitle($title);
}