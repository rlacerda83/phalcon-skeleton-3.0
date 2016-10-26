<?php

use Phalcon\DI\FactoryDefault;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

$di = new FactoryDefault();

// TODO read from config

/**
 * Database connection is created based in the parameters defined in the config file
 */
$di['db'] = function() use ($config) {
    return new DbAdapter(array(
        "host" => '127.0.0.1',
        "username" => 'root',
        "password" => '123mudar',
        "dbname" => 'uello'
    ));
};
