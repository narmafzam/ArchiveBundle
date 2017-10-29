<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/29/17
 * Time: 3:52 PM
 */

namespace Narmafzam\ArchiveBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait FileNameTrait
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=Narmafzam\ArchiveBundle\Entity\Interfaces\FileNameInterface::FILENAME_LENGTH_MIN)
     * @ORM\Column(type="string")
     */
    protected $fileName;

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }
}