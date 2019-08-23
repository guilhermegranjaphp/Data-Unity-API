<?php
return [
    'doctrine' => [
        'driver' => [
            'Dados_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    0 => './module/Dados/src/V1/Entity',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Dados' => 'Dados_driver',
                ],
            ],
        ],
    ],
    'router' => [
        'routes' => [
            'dados.rest.doctrine.enderecos' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/enderecos[/:enderecos_id]',
                    'defaults' => [
                        'controller' => 'Dados\\V1\\Rest\\Enderecos\\Controller',
                    ],
                ],
            ],
            'dados.rest.doctrine.usuarios' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/usuarios[/:usuarios_id]',
                    'defaults' => [
                        'controller' => 'Dados\\V1\\Rest\\Usuarios\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'dados.rest.doctrine.enderecos',
            1 => 'dados.rest.doctrine.usuarios',
        ],
    ],
    'zf-rest' => [
        'Dados\\V1\\Rest\\Enderecos\\Controller' => [
            'listener' => \Dados\V1\Rest\Enderecos\EnderecosResource::class,
            'route_name' => 'dados.rest.doctrine.enderecos',
            'route_identifier_name' => 'enderecos_id',
            'entity_identifier_name' => 'idendereco',
            'collection_name' => 'enderecos',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Dados\V1\Entity\Enderecos::class,
            'collection_class' => \Dados\V1\Rest\Enderecos\EnderecosCollection::class,
            'service_name' => 'Enderecos',
        ],
        'Dados\\V1\\Rest\\Usuarios\\Controller' => [
            'listener' => \Dados\V1\Rest\Usuarios\UsuariosResource::class,
            'route_name' => 'dados.rest.doctrine.usuarios',
            'route_identifier_name' => 'usuarios_id',
            'entity_identifier_name' => 'idusuario',
            'collection_name' => 'usuarios',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Dados\V1\Entity\Usuarios::class,
            'collection_class' => \Dados\V1\Rest\Usuarios\UsuariosCollection::class,
            'service_name' => 'Usuarios',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Dados\\V1\\Rest\\Enderecos\\Controller' => 'HalJson',
            'Dados\\V1\\Rest\\Usuarios\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Dados\\V1\\Rest\\Enderecos\\Controller' => [
                0 => 'application/vnd.dados.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Dados\\V1\\Rest\\Usuarios\\Controller' => [
                0 => 'application/vnd.dados.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Dados\\V1\\Rest\\Enderecos\\Controller' => [
                0 => 'application/vnd.dados.v1+json',
                1 => 'application/json',
            ],
            'Dados\\V1\\Rest\\Usuarios\\Controller' => [
                0 => 'application/vnd.dados.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Dados\V1\Entity\Enderecos::class => [
                'route_identifier_name' => 'enderecos_id',
                'entity_identifier_name' => 'idendereco',
                'route_name' => 'dados.rest.doctrine.enderecos',
                'hydrator' => 'Dados\\V1\\Rest\\Enderecos\\EnderecosHydrator',
            ],
            \Dados\V1\Rest\Enderecos\EnderecosCollection::class => [
                'entity_identifier_name' => 'idendereco',
                'route_name' => 'dados.rest.doctrine.enderecos',
                'is_collection' => true,
            ],
            \Dados\V1\Entity\Usuarios::class => [
                'route_identifier_name' => 'usuarios_id',
                'entity_identifier_name' => 'idusuario',
                'route_name' => 'dados.rest.doctrine.usuarios',
                'hydrator' => 'Dados\\V1\\Rest\\Usuarios\\UsuariosHydrator',
            ],
            \Dados\V1\Rest\Usuarios\UsuariosCollection::class => [
                'entity_identifier_name' => 'idusuario',
                'route_name' => 'dados.rest.doctrine.usuarios',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'doctrine-connected' => [
            \Dados\V1\Rest\Enderecos\EnderecosResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Dados\\V1\\Rest\\Enderecos\\EnderecosHydrator',
            ],
            \Dados\V1\Rest\Usuarios\UsuariosResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Dados\\V1\\Rest\\Usuarios\\UsuariosHydrator',
            ],
        ],
    ],
    'doctrine-hydrator' => [
        'Dados\\V1\\Rest\\Enderecos\\EnderecosHydrator' => [
            'entity_class' => \Dados\V1\Entity\Enderecos::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'Dados\\V1\\Rest\\Usuarios\\UsuariosHydrator' => [
            'entity_class' => \Dados\V1\Entity\Usuarios::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
    ],
    'zf-content-validation' => [
        'Dados\\V1\\Rest\\Enderecos\\Controller' => [
            'input_filter' => 'Dados\\V1\\Rest\\Enderecos\\Validator',
        ],
        'Dados\\V1\\Rest\\Usuarios\\Controller' => [
            'input_filter' => 'Dados\\V1\\Rest\\Usuarios\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Dados\\V1\\Rest\\Enderecos\\Validator' => [
            0 => [
                'name' => 'rua',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 100,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'cidade',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 45,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'estado',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 45,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'numero',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 45,
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'bairro',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 100,
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => 'complemento',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 45,
                        ],
                    ],
                ],
            ],
        ],
        'Dados\\V1\\Rest\\Usuarios\\Validator' => [
            0 => [
                'name' => 'nome',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 100,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'cpf',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 45,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'nCelular',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 45,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'nResidencial',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 45,
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'nComercial',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 45,
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => 'email',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 45,
                        ],
                    ],
                ],
            ],
            6 => [
                'name' => 'dtNascimento',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 45,
                        ],
                    ],
                ],
            ],
            7 => [
                'name' => 'senha',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 256,
                        ],
                    ],
                ],
            ],
        ],
    ],
];
