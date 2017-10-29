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

trait MimeTrait
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=Narmafzam\ArchiveBundle\Entity\Interfaces\MimeInterface::MIME_LENGTH_MIN)
     * @ORM\Column(type="string")
     */
    protected $mime;

    /**
     * @return string
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * @param string $mime
     */
    public function setMime($mime)
    {
        $this->mime = $mime;
    }

}