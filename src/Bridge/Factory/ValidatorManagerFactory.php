<?php

namespace zf2timo\Bridge\Factory;

use Zend\Validator\ValidatorPluginManager;

class ValidatorManagerFactory extends AbstractPluginManagerFactory
{
    const PLUGIN_MANAGER_CLASS = ValidatorPluginManager::class;

    const CONFIG_KEY = 'validators';
}
