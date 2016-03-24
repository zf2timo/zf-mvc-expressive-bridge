<?php

namespace zf2timo\Bridge\Factory;

use Zend\Form\FormElementManager;

class FormElementManagerFactory extends AbstractPluginManagerFactory
{
    const PLUGIN_MANAGER_CLASS = FormElementManager::class;

    const CONFIG_KEY = 'form_elements';
}
