<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/8
 */

namespace Narmafzam\ArchiveBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('narmafzam_archive');

        $rootNode
            ->children()
                ->arrayNode('contract')
                    ->children()
                        ->scalarNode('entity')->end()
                        ->arrayNode('form')
                            ->children()
                                ->arrayNode('common')
                                    ->children()
                                        ->scalarNode('type')->end()
                                    ->end()
                                ->end() // common
                            ->end()
                        ->end() // form
                    ->end()
                ->end() // contract
            ->end()
        ;

        return $treeBuilder;
    }
}