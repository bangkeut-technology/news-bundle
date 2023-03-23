<?php
declare(strict_types=1);

namespace BangkeutTechnology\Bundle\NewsBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

/**
 * Class BangkeutTechnologyNewsBundleExtension
 *
 * @package BangkeutTechnology\Bundle\NewsBundle\DependencyInjection
 * @author Vandeth THO <thovandeth@gmail.com>
 */
class BangkeutTechnologyNewsBundleExtension extends Extension
{
    /**
     * @inheritDoc
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../../config'));
        $loader->load('services.xml');
    }
}
