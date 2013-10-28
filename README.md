Abstract Factory
====================

A simple module that removes the requirement to setup invokables and factories for services and controllers.

There is no requirement to use aliases that make your code inconsistant, just use the full namespace and the abstract will find it and instantiate it when required.

This module is aimed at saving time which would otherwise be spent on configuration. 


Installation
--------------
1) Add the following requirement to your projects composer.json file.

Within the "require" section:

```php
"zf-hipsters/abstract-factory": ">=0.9"
```

2) Open up your command line and run

```
php ./composer.phar update
```

2) Add 'ZfhAbstractFactory' to your /config/application.config.php modules

Route Example
--------------

Without ZfhAbstractFactory being enabled, you need to register your controllers within configuration such as:

```
'controllers' => array(
    'invokables' => array(
        'Album\Controller\Album' => 'Album\Controller\AlbumController',
    ),
),

```

When ZfhAbstractFactory is enabled, you can avoid registering controllers in this way if you use the FQN of the controller in your route.

Note: the FQN of the controller has been used.

```
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
            ),
        )
);
```

Another example with dynamic with fixed controller and a dynamic action.

```
'smurf' => array(
    'type' => 'Zend\Mvc\Router\Http\Segment',
    'options' => array(
        'route'    => '/smurf[/:action]',
        'controller' => 'Application\Controller\SmurfController',
        'defaults' => array(
            'action' => 'index',
        ),
    ),
),

```


ServiceManager Example
--------------

In your controller file
```
$this->getServiceLocator()->get('Application\Service\MyService');
```

Calling a factory
```
$this->getServiceLocator()->get('Application\Service\MyServiceFactory');
```
