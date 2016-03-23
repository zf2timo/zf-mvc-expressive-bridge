<?php

namespace zf2timo\Bridge\Factory;

use Interop\Container\ContainerInterface;

class AbstractPluginManagerFactory
{
    const PLUGIN_MANAGER_CLASS = 'AbstractPluginManager';

    const CONFIG_KEY = 'AbstractPluginManager';

    /**
     * Create and return a plugin manager.
     *
     * Classes that extend this should provide a valid class for
     * the PLUGIN_MANGER_CLASS constant.
     *
     * @param  ContainerInterface $container
     * @param  string $name
     * @param  null|array $options
     * @return mixed
     */
    public function __invoke(ContainerInterface $container, $name, array $options = null)
    {
        $options = $options ?: $this->getCreationOptions($container) ?: [];
        $pluginManagerClass = static::PLUGIN_MANAGER_CLASS;
        return new $pluginManagerClass($container, $options);
    }

    /**
     * @param ContainerInterface $container
     * @return array
     */
    private function getCreationOptions(ContainerInterface $container)
    {
        $config = $container->get('config');

        if (is_array($config) === false || isset($config[self::CONFIG_KEY]) === false) {
            return [];
        }

        return $config[self::CONFIG_KEY];
    }
}
