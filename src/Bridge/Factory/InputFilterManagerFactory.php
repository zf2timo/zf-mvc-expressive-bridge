<?php


namespace TTe\Bridge\Factory;

use Zend\InputFilter\InputFilterPluginManager;

class InputFilterManagerFactory extends AbstractPluginManagerFactory
{
    const PLUGIN_MANAGER_CLASS = InputFilterPluginManager::class;
}