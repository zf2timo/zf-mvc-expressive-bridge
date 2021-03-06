# ZF MVC Expressive Bridge

Currently all Factories for the Zend PluginManagers are in the Zend\MVC Package.
When the next iteration of Zend Framework is released, all Factories are moved to their correct Packages. But until
then you can install this Bridge

All Factories just copied form the Zend\MVC@2.7.3 Packages. They only extended slightly to load the Config from the ContainerInterface - because it is not automatically injected by Expressive.

# Installation

composer:
```
composer require zf2timo/zf-mvc-expressive-bridge
```

The other Packages are not installed automatically - they are only suggest. I don't want to bloat your Application
with unused Packages.
So it is on your side, to add the correct dependencies.

# Configuration

Example for the InputFilterManager:
```php
// config/autoload/dependencies.global.php
return [
    'dependencies' => [
        'factories' => [
            Zend\InputFilter\InputFilter::class => \zf2timo\Bridge\Factory\InputFilterManagerFactory::class
        ]
    ],
];
```
The Configuration Keys are followed by ZF2 ServiceManager Keys:

array_key|PluginManager
---------|-------------
form_elements|FormElementManager
filters|FilterManager
hydrators|HydratorManager
input_filters|InputFilterManager
validators|FilterManager

More Information: [Rob Allen Zend\ServiceManager configuration keys](https://akrabat.com/zendservicemanager-configuration-keys/)
