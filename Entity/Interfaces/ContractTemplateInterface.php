<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Entity\Interfaces;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Interface ContractTemplateInterface
 * @package Narmafzam\ArchiveBundle\Entity\Interfaces
 */
interface ContractTemplateInterface
{
    /**
     * @return ContractTemplateInterface
     */
    public function getParent() : ContractTemplateInterface;

    /**
     * @param ContractTemplateInterface $parent
     *
     * @return mixed
     */
    public function setParent(ContractTemplateInterface $parent);

    /**
     * @return ArrayCollection
     */
    public function getChildren() : ArrayCollection;

    /**
     * @param ContractTemplateInterface $child
     *
     * @return mixed
     */
    public function addChild(ContractTemplateInterface $child);

    /**
     * @param ContractTemplateInterface $child
     *
     * @return mixed
     */
    public function removeChild(ContractTemplateInterface $child);

    /**
     * @return ArrayCollection
     */
    public function getCommonLines() : ArrayCollection;

    /**
     * @param ContractCommonLineInterface $commonLine
     *
     * @return mixed
     */
    public function addCommonLine(ContractCommonLineInterface $commonLine);

    /**
     * @param ContractCommonLineInterface $commonLine
     *
     * @return mixed
     */
    public function removeCommonLine(ContractCommonLineInterface $commonLine);
}