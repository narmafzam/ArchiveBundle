<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/13
 */

namespace Narmafzam\ArchiveBundle\Entity\Interfaces;

interface ContractInterface
{
    public function getAttachments();

    public function addAttachment(ContractAttachmentInterface $contractAttachment);

    public function removeAttachment(ContractAttachmentInterface $contractAttachment);
}