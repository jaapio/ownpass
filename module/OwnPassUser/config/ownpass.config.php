<?php
/**
 * This file is part of Own Pass. (https://github.com/ownpass/)
 *
 * @link https://github.com/ownpass/ownpass for the canonical source repository
 * @copyright Copyright (c) 2016-2017 Own Pass. (https://github.com/ownpass/)
 * @license https://raw.githubusercontent.com/ownpass/ownpass/master/LICENSE MIT
 */

namespace OwnPassUser;

use Zend\Crypt\Password\Bcrypt;
use Zend\Crypt\Password\PasswordInterface;

return [
    'doctrine' => [
        'driver' => [
            __NAMESPACE__ => [
                'class' => 'Doctrine\\ORM\\Mapping\\Driver\\XmlDriver',
                'cache' => 'array',
                'paths' => [
                    __DIR__ . '/doctrine',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    __NAMESPACE__ => __NAMESPACE__
                ],
            ],
        ]
    ],
    'service_manager' => [
        'invokables' => [
            PasswordInterface::class => Bcrypt::class,
        ],
    ],
];
