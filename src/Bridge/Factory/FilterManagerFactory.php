<?php

namespace zf2timo\Bridge\Factory;

use Zend\Filter\FilterPluginManager;

class FilterManagerFactory extends AbstractPluginManagerFactory
{
    const PLUGIN_MANAGER_CLASS = FilterPluginManager::class;

    const CONFIG_KEY = 'filters';
}
