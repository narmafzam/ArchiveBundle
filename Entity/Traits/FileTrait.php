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

trait FileTrait
{
    /**
     * @Assert\NotBlank()
     * @Assert\File(
     *     mimeTypes = {
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_7Z,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_BMP,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_JPG,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_GIF,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_PNG,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_SVG,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_TIFF,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_PSD,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_DWG,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_WAV,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_MP3,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_AVI,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_MPEG,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_HTML,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_XML,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_PDF,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_DOC,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_XLS,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_PPT,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_MDB,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_ZIP,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_RAR,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_DOCX,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_XLSX,
     *         Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::MIME_PPTX
     *     },
     *     maxSize=Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface::FILE_MAX_SIZE
     * )
     * @ORM\Column(type="string")
     */
    protected $file;

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param str   ing $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

}