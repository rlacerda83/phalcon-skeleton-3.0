<?php

use Phalcon\DI\FactoryDefault;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

$di = new FactoryDefault();

// TODO read from config

/**
 * Database connection is created based in the parameters defined in the config file
 */
$di['db'] = function() use($config) {
    return new DbAdapter(array(
        "host" => $config->get('database')->host,
        "username" => $config->get('database')->username,
        "password" => $config->get('database')->password,
        "dbname" => $config->get('database')->dbname
    ));
};
