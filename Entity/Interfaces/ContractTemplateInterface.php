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
     * @return ArrayCollection
     */
    public function getCommonLines() : ArrayCollection;

    /**
     * @param ContractCommonLine $commonLine
     *
     * @return mixed
     */
    public function addCommonLine(ContractCommonLine $commonLine);

    /**
     * @param ContractCommonLine $commonLine
     *
     * @return mixed
     */
    public function removeCommonLine(ContractCommonLine $commonLine);
}