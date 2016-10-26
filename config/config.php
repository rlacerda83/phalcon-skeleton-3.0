<?php

return [
    'database' => [
        'adapter' => 'Mysql',
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'dbname' => 'uello'
    ],
    'cache' => [
        'lifetime' => 172800, // 2 days
        'redis' => [
            'host' => '127.0.0.1',
            'port' => '6379',
            'index' => 4,
        ],
    ],
];
