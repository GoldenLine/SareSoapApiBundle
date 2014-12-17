<?php

namespace GoldenLine\SareSoapApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('goldenline_sare_soap_api');

        $rootNode
            ->children()
                ->scalarNode('wsdl')
                    ->defaultValue('https://www.enewsletter.pl/api/server.php?wsdl')
                ->end()
                ->scalarNode('cert')
                    ->isRequired()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
