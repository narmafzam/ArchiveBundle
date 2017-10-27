<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Entity\Interfaces;

use Doctrine\Common\Collections\Collection;

/**
 * Interface ContractCommonLine
 * @package Narmafzam\ArchiveBundle\Entity\Interfaces
 */
interface ContractCommonLineInterface
{
    /**
     * @return Collection
     */
    public function getTemplates() : Collection;

    /**
     * @param ContractTemplateInterface $contractTemplate
     *
     * @return mixed
     */
    public function addTemplate(ContractTemplateInterface $contractTemplate);

    /**
     * @param ContractTemplateInterface $contractTemplate
     *
     * @return mixed
     */
    public function removeTemplate(ContractTemplateInterface $contractTemplate);

    /**
     * @return ContractLineKindInterface
     */
    public function getKind() : ContractLineKindInterface;

    /**
     * @param ContractLineKindInterface $contractLineKind
     *
     * @return mixed
     */
    public function setKind(ContractLineKindInterface $contractLineKind);
}