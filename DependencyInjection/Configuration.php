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
                                ->scalarNode('back')->end()
                                ->scalarNode('front')->end()
                            ->end()
                        ->end() // form
                        ->arrayNode('attachment')
                            ->children()
                                ->scalarNode('entity')->end()
                                ->arrayNode('form')
                                    ->children()
                                        ->scalarNode('back')->end()
                                        ->scalarNode('front')->end()
                                    ->end()
                                ->end() // attachment form
                            ->end()
                        ->end() // attachment
                    ->end()
                ->end() // contract
                ->arrayNode('document')
                    ->children()
                        ->scalarNode('entity')->end()
                        ->arrayNode('form')
                            ->children()
                                ->scalarNode('back')->end()
                                ->scalarNode('front')->end()
                            ->end()
                        ->end() // form
                        ->arrayNode('attachment')
                            ->children()
                                ->scalarNode('entity')->end()
                                ->arrayNode('form')
                                    ->children()
                                        ->scalarNode('back')->end()
                                        ->scalarNode('front')->end()
                                    ->end()
                                ->end() // attachment form
                            ->end()
                        ->end() // attachment
                    ->end()
                ->end() // document
                ->arrayNode('letter')
                    ->children()
                        ->scalarNode('entity')->end()
                        ->arrayNode('form')
                            ->children()
                                ->scalarNode('back')->end()
                                ->scalarNode('front')->end()
                            ->end()
                        ->end() // form
                        ->arrayNode('attachment')
                            ->children()
                                ->scalarNode('entity')->end()
                                ->arrayNode('form')
                                    ->children()
                                        ->scalarNode('back')->end()
                                        ->scalarNode('front')->end()
                                    ->end()
                                ->end() // attachment form
                            ->end()
                        ->end() // attachment
                    ->end()
                ->end() // letter
            ->end()
        ;

        return $treeBuilder;
    }
}