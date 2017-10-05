<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/9/30
 */

namespace Narmafzam\ArchiveBundle\Entity;

use Narmafzam\ArchiveBundle\Entity\Traits\AttachmentTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\IdTrait;
use Narmafzam\ArchiveBundle\Entity\Traits\TitleTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contract_attachment")
 */
class ContractAttachment
{
    use IdTrait;
    use TitleTrait;
    use AttachmentTrait;

    /**
     * @ORM\ManyToOne(targetEntity="Narmafzam\ArchiveBundle\Entity\Contract", inversedBy="attachments")
     */
    private $contract;

    /**
     * @return Contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * @param Contract $contract
     */
    public function setContract($contract)
    {
        $this->contract = $contract;
    }

}