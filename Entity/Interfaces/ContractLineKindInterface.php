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
 * Interface ContractLineKindInterface
 * @package Narmafzam\ArchiveBundle\Entity\Interfaces
 */
interface ContractLineKindInterface
{
    /**
     * @return ContractLineKindInterface
     */
    public function getParent() : ContractLineKindInterface;

    /**
     * @param ContractLineKindInterface $parent
     *
     * @return mixed
     */
    public function setParent(ContractLineKindInterface $parent);

    /**
     * @return ArrayCollection
     */
    public function getChildren() : ArrayCollection;

    /**
     * @param ContractLineKindInterface $child
     *
     * @return mixed
     */
    public function addChild(ContractLineKindInterface $child);

    /**
     * @param ContractLineKindInterface $child
     *
     * @return mixed
     */
    public function removeChild(ContractLineKindInterface $child);

    /**
     * @return ArrayCollection
     */
    public function getLines() : ArrayCollection;

    /**
     * @param ContractLineInterface $contractLine
     *
     * @return mixed
     */
    public function addLine(ContractLineInterface $contractLine);

    /**
     * @param ContractLineInterface $contractLine
     *
     * @return mixed
     */
    public function removeLine(ContractLineInterface $contractLine);

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