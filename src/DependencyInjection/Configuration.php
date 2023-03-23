<?php
declare(strict_types=1);

namespace BangkeutTechnology\Bundle\NewsBundle\DependencyInjection;

use BangkeutTechnology\Bundle\NewsBundle\Entity\Post;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @package BangkeutTechnology\Bundle\NewsBundle\DependencyInjection
 * @author Vandeth THO <thovandeth@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('bangkeut_news');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode->children()
            ->scalarNode('post_class');

        return $treeBuilder;
    }
}
