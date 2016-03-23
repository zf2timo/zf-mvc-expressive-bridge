<?php

namespace TTe\Bridge\Factory;

use Zend\Validator\ValidatorPluginManager;

class ValidatorManagerFactory extends AbstractPluginManagerFactory
{
    const PLUGIN_MANAGER_CLASS = ValidatorPluginManager::class;
}
