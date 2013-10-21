<?php
/**
 * ZF-Hipsters Abstract Factory (https://github.com/zf-hipsters)
 *
 * @link      https://github.com/zf-hipsters/abstract-factory for the canonical source repository
 * @copyright Copyright (c) 2013 ZF-Hipsters
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache Licence, Version 2.0
 */

return array(
    'service_manager' => array(
        'abstract_factories' => array(
            'AbstractServiceFactory' => 'ZfhAbstractFactory\Service\AbstractServiceFactory',
        ),
    ),
    'controllers' => array(
        'abstract_factories' => array(
            'AbstractControllerFactory' => 'ZfhAbstractFactory\Service\AbstractServiceFactory',
        ),
    ),
);
