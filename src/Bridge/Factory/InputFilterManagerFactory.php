<?php


namespace zf2timo\Bridge\Factory;

use Zend\InputFilter\InputFilterPluginManager;

class InputFilterManagerFactory extends AbstractPluginManagerFactory
{
    const PLUGIN_MANAGER_CLASS = InputFilterPluginManager::class;

    const CONFIG_KEY = 'input_filters';
}
