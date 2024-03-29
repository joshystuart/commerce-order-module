<?php

return [
    'modules' => [
        'Zoop\MaggottModule',
        'DoctrineModule',
        'DoctrineMongoODMModule',
        'Zoop\ShardModule',
        'Zoop\GatewayModule',
        'Zoop\GomiModule',
        'Zoop\Api',
        'Zoop\Common',
        'Zoop\User',
        'Zoop\Store',
        'Zoop\Order',
        'Zoop\Test'
    ],
    'module_listener_options' => [
        'config_glob_paths' => [
            __DIR__ . '/../config/module.config.php',
            __DIR__ . '/test.module.config.php',
        ],
    ],
];
