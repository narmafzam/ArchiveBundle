<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/9/26
 */

namespace Narmafzam\ArchiveBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait AttachmentTrait
{
    /**
     * @Assert\NotBlank()
     * @Assert\File(
     *     mimeTypes = {
     *         Interfaces\AttachmentInterface::MIME_7Z,
     *         Interfaces\AttachmentInterface::MIME_BMP,
     *         Interfaces\AttachmentInterface::MIME_JPG,
     *         Interfaces\AttachmentInterface::MIME_GIF,
     *         Interfaces\AttachmentInterface::MIME_PNG,
     *         Interfaces\AttachmentInterface::MIME_SVG,
     *         Interfaces\AttachmentInterface::MIME_TIFF,
     *         Interfaces\AttachmentInterface::MIME_PSD,
     *         Interfaces\AttachmentInterface::MIME_DWG,
     *         Interfaces\AttachmentInterface::MIME_WAV,
     *         Interfaces\AttachmentInterface::MIME_MP3,
     *         Interfaces\AttachmentInterface::MIME_AVI,
     *         Interfaces\AttachmentInterface::MIME_MPEG,
     *         Interfaces\AttachmentInterface::MIME_HTML,
     *         Interfaces\AttachmentInterface::MIME_XML,
     *         Interfaces\AttachmentInterface::MIME_PDF,
     *         Interfaces\AttachmentInterface::MIME_DOC,
     *         Interfaces\AttachmentInterface::MIME_XLS,
     *         Interfaces\AttachmentInterface::MIME_PPT,
     *         Interfaces\AttachmentInterface::MIME_MDB,
     *         Interfaces\AttachmentInterface::MIME_ZIP,
     *         Interfaces\AttachmentInterface::MIME_RAR,
     *         Interfaces\AttachmentInterface::MIME_DOCX,
     *         Interfaces\AttachmentInterface::MIME_XLSX,
     *         Interfaces\AttachmentInterface::MIME_PPTX
     *     },
     *     maxSize=Interfaces\AttachmentInterface::FILE_MAX_SIZE
     * )
     * @ORM\Column(type="string")
     */
    protected $location;

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

}