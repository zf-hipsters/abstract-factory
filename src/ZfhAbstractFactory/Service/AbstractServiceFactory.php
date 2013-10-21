<?php
/**
 * ZF-Hipsters Abstract Factory (https://github.com/zf-hipsters)
 *
 * @link      https://github.com/zf-hipsters/zfh-abstract-factory for the canonical source repository
 * @copyright Copyright (c) 2013 ZF-Hipsters
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache Licence, Version 2.0
 */

namespace ZfhAbstractFactory\Service;

use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class AbstractServiceFactory implements AbstractFactoryInterface
{
    protected $config;

    public function canCreateServiceWithName(ServiceLocatorInterface $locator, $name, $requestedName)
    {
        if (class_exists($requestedName)){
            return true;
        }

        return false;
    }

    public function createServiceWithName(ServiceLocatorInterface $locator, $name, $requestedName)
    {
        $class = $requestedName;
        return new $class;
    }
}