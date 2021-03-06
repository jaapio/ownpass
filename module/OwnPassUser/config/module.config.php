<?php
return [
    'service_manager' => [
        'factories' => [
            \OwnPassUser\V1\Rest\Account\AccountResource::class => \OwnPassUser\V1\Rest\Account\AccountResourceFactory::class,
            \OwnPassUser\V1\Rest\User\UserResource::class => \OwnPassUser\V1\Rest\User\UserResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'own-pass-user.rest.account' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/api/account[/:account_id]',
                    'defaults' => [
                        'controller' => 'OwnPassUser\\V1\\Rest\\Account\\Controller',
                    ],
                ],
            ],
            'own-pass-user.rest.user' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/api/user',
                    'defaults' => [
                        'controller' => 'OwnPassUser\\V1\\Rest\\User\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'own-pass-user.rest.account',
            1 => 'own-pass-user.rest.user',
        ],
    ],
    'zf-rest' => [
        'OwnPassUser\\V1\\Rest\\Account\\Controller' => [
            'listener' => \OwnPassUser\V1\Rest\Account\AccountResource::class,
            'route_name' => 'own-pass-user.rest.account',
            'route_identifier_name' => 'account_id',
            'collection_name' => 'account',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \OwnPassUser\V1\Rest\Account\AccountEntity::class,
            'collection_class' => \OwnPassUser\V1\Rest\Account\AccountCollection::class,
            'service_name' => 'Account',
        ],
        'OwnPassUser\\V1\\Rest\\User\\Controller' => [
            'listener' => \OwnPassUser\V1\Rest\User\UserResource::class,
            'route_name' => 'own-pass-user.rest.user',
            'route_identifier_name' => 'user_id',
            'collection_name' => 'user',
            'entity_http_methods' => [],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \OwnPassUser\V1\Rest\User\UserEntity::class,
            'collection_class' => \OwnPassUser\V1\Rest\User\UserCollection::class,
            'service_name' => 'User',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'OwnPassUser\\V1\\Rest\\Account\\Controller' => 'HalJson',
            'OwnPassUser\\V1\\Rest\\User\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'OwnPassUser\\V1\\Rest\\Account\\Controller' => [
                0 => 'application/vnd.own-pass-user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'OwnPassUser\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.own-pass-user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'OwnPassUser\\V1\\Rest\\Account\\Controller' => [
                0 => 'application/vnd.own-pass-user.v1+json',
                1 => 'application/json',
            ],
            'OwnPassUser\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.own-pass-user.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \OwnPassUser\V1\Rest\Account\AccountEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'own-pass-user.rest.account',
                'route_identifier_name' => 'account_id',
                'hydrator' => \Zend\Hydrator\ObjectProperty::class,
            ],
            \OwnPassUser\V1\Rest\Account\AccountCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'own-pass-user.rest.account',
                'route_identifier_name' => 'account_id',
                'is_collection' => true,
            ],
            \OwnPassUser\V1\Rest\User\UserEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'own-pass-user.rest.user',
                'route_identifier_name' => 'user_id',
                'hydrator' => \Zend\Hydrator\ObjectProperty::class,
            ],
            \OwnPassUser\V1\Rest\User\UserCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'own-pass-user.rest.user',
                'route_identifier_name' => 'user_id',
                'is_collection' => true,
            ],
        ],
    ],
    'controllers' => [
        'factories' => [],
    ],
    'zf-rpc' => [],
    'zf-content-validation' => [
        'OwnPassUser\\V1\\Rest\\Account\\Controller' => [
            'input_filter' => 'OwnPassUser\\V1\\Rest\\Account\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'OwnPassUser\\V1\\Rest\\Account\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Zend\I18n\Validator\Alpha::class,
                        'options' => [
                            'allowwhitespace' => true,
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                        'options' => [],
                    ],
                    1 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'first_name',
                'description' => 'The first name of the person that owns the account.',
                'field_type' => 'string',
            ],
            1 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Zend\I18n\Validator\Alpha::class,
                        'options' => [
                            'allowwhitespace' => true,
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                        'options' => [],
                    ],
                    1 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'last_name',
                'description' => 'The last name of the person that owns the account.',
                'field_type' => 'string',
            ],
            2 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Zend\I18n\Validator\Alnum::class,
                        'options' => [],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                        'options' => [],
                    ],
                    1 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                    2 => [
                        'name' => \Zend\Filter\StringToLower::class,
                        'options' => [],
                    ],
                ],
                'name' => 'identity',
                'description' => 'The identity to identify the account with while authenticating.',
            ],
            3 => [
                'required' => true,
                'validators' => [],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'credential',
                'description' => 'The credential of the account to authenticate with.',
            ],
            4 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\InArray::class,
                        'options' => [
                            'strict' => true,
                            'haystack' => [
                                0 => 'admin',
                                1 => 'user',
                            ],
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                        'options' => [],
                    ],
                    1 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                    2 => [
                        'name' => \Zend\Filter\StringToLower::class,
                        'options' => [],
                    ],
                ],
                'name' => 'role',
                'description' => 'The role of the user which defines the permissions that the user has.',
            ],
        ],
        'OwnPassUser\\V1\\Rpc\\Authenticate\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Zend\I18n\Validator\Alnum::class,
                        'options' => [],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                    1 => [
                        'name' => \Zend\Filter\StringToLower::class,
                        'options' => [],
                    ],
                    2 => [
                        'name' => \Zend\Filter\StripTags::class,
                        'options' => [],
                    ],
                ],
                'name' => 'identity',
                'description' => 'The identity to authenticate.',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'credential',
                'description' => 'The credential to authenticate.',
            ],
        ],
    ],
    'zf-mvc-auth' => [
        'authorization' => [
            'OwnPassUser\\V1\\Rest\\Account\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => false,
                    'DELETE' => true,
                ],
            ],
        ],
    ],
];
