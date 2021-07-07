<?php

namespace ContainerRPX3K6u;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_CachePoolListService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolListCommand.php';

        $container->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.webpack_encore', 1 => 'cache.app', 2 => 'cache.system', 3 => 'cache.validator', 4 => 'cache.serializer', 5 => 'cache.annotations', 6 => 'cache.property_info', 7 => 'cache.validator_expression_language', 8 => 'cache.doctrine.orm.default.result', 9 => 'cache.doctrine.orm.default.query', 10 => 'cache.security_expression_language']);

        $instance->setName('cache:pool:list');
        $instance->setDescription('List available cache pools');

        return $instance;
    }
}
