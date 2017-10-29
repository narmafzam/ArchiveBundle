<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/29/17
 * Time: 12:56 PM
 */

namespace Narmafzam\ArchiveBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait PathTrait
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=Narmafzam\ArchiveBundle\Entity\Interfaces\PathInterface::PATH_LENGTH_MIN)
     * @ORM\Column(type="string")
     */
    protected $path;

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

}