# ZF MVC Expressive Bridge

Currently all Factories for the Zend PluginManagers are in the Zend\MVC Package.
When the next iteration of Zend Framework is released, all Factories are moved to their correct Packages. But until
then you can install this Bridge

All Factories just copied form the Zend\MVC@2.7.3

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
