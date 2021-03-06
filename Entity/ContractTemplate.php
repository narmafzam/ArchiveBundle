<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace ArchiveBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Narmafzam\ArchiveBundle\Entity\Base\ContractTemplate as BaseClass;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractCommonLineInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractTemplateInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="contract_template")
 */
class ContractTemplate extends BaseClass
{
    /**
     * @ORM\ManyToOne(targetEntity="ArchiveBundle\Entity\ContractTemplate", inversedBy="children")
     */
    protected $parent;

    /**
     * @ORM\OneToMany(targetEntity="ArchiveBundle\Entity\ContractTemplate", mappedBy="parent", cascade={"persist", "remove"})
     */
    protected $children;

    /**
     * @ORM\ManyToMany(targetEntity="ArchiveBundle\Entity\ContractCommonLine", mappedBy="templates")
     */
    protected $commonLines;

    public function __construct()
    {
        $this->children = new ArrayCollection();
        $this->commonLines = new ArrayCollection();
    }

    public function getParent(): ContractTemplateInterface
    {
        return $this->parent;
    }

    public function setParent(ContractTemplateInterface $parent)
    {
        $this->parent = $parent;
    }

    public function getChildren(): Collection
    {
        return $this->children;
    }

    public function addChild(ContractTemplateInterface $child)
    {
        $this->children->add($child);
        $child->setParent($this);
    }

    public function removeChild(ContractTemplateInterface $child)
    {
        $this->children->removeElement($child);
    }

    public function getCommonLines(): Collection
    {
        return $this->commonLines;
    }

    public function addCommonLine(ContractCommonLineInterface $commonLine)
    {
        $this->commonLines->add($commonLine);
        $commonLine->addTemplate($this);
    }

    public function removeCommonLine(ContractCommonLineInterface $commonLine)
    {
        $this->commonLines->removeElement($commonLine);
        $commonLine->removeTemplate($this);
    }

}