<?php
/**
 * Created by PhpStorm.
 * User: tilotiti
 * Date: 20/02/2017
 * Time: 16:21
 */

namespace Tiloweb\QuipuBundle\DependencyInjection;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class QuipuExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container) {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load("services.yml");

        $configuration = new Configuration();

        $config = $this->processConfiguration($configuration, $configs);
    }
}