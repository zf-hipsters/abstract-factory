Abstract Factory
====================

A simple module that removes the requirement to setup invokables and factories for services and controllers.

Installation
--------------
1) Add the following requirement to your projects composer.json file.

```php
"zf-hipsters/abstract-factory": "dev-master"
```

2) Open up your command line and run

```
php ./composer.phar update
```

2) Add 'ZfhAbstractFactory' to your /config/application.config.php modules

Route Example
===============

``
'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller'    => 'Application\Controller\IndexController',
                        'action'     => 'index',
                    ),
                ),
            ),
        )
);
