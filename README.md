Abstract Factory
====================

A simple module that removes the requirement to setup invokables and factories for services and controllers.

There is no requirement to use aliases that make your code inconsistant, just use the full namespace and the abstract will find it and instantiate it when required.

Installation
--------------
1) Add the following requirement to your projects composer.json file.

Within the "repositories" section (create it as below if it doesn't exist):

```php
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/zf-hipsters/abstract-factory"
  }
],
```
Within the "require" section:

```php
"zf-hipsters/abstract-factory": "dev-master"
```

2) Open up your command line and run

```
php ./composer.phar update
```

2) Add 'ZfhAbstractFactory' to your /config/application.config.php modules

Route Example
--------------

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
````

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
