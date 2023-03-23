<?php
declare(strict_types=1);

namespace BangkeutTechnology\Bundle\NewsBundle\DependencyInjection;

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

        return $treeBuilder;
    }
}
