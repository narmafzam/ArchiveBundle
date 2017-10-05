<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Date: 2017/9/29
 */
namespace Narmafzam\ArchiveBundle\Entity;

use Narmafzam\ArchiveBundle\Entity\Traits\BodyTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\IdTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="letter_note")
 */
class LetterNote
{
    use IdTrait;
    use BodyTrait;
    use TimestampableTrait;

    /**
     * @ORM\ManyToOne(targetEntity="Narmafzam\ArchiveBundle\Entity\Letter", inversedBy="notes")
     */
    private $letter;

    /**
     * @return Letter
     */
    public function getLetter()
    {
        return $this->letter;
    }

    /**
     * @param Letter $letter
     */
    public function setLetter(Letter $letter)
    {
        $this->letter = $letter;
    }

}