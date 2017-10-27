<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\Menu\Back;

use Knp\Menu\FactoryInterface;

/**
 * Class SideMenuBuilder
 * @package Narmafzam\ArchiveBundle\Menu\Back
 */
class SideMenuBuilder
{
    /**
     * @var FactoryInterface
     */
    private $factory;

    /**
     * SideMenuBuilder constructor.
     *
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @return FactoryInterface
     */
    protected function getFactory(): FactoryInterface
    {
        return $this->factory;
    }

    /**
     * @param array $options
     */
    protected function createSideMenu(array $options)
    {
        $menu = $this->getFactory()->createItem('root')
            ->setChildrenAttribute('class', 'nav nav-sidebar')
        ;

        return $menu;
    }
}