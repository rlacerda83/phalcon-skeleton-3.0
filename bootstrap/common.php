<?php

$basePath = realpath(dirname(__DIR__));

$localConfigurationFile = $basePath . '/config/config.php';
if (!file_exists($localConfigurationFile)) {
    exit('Please copy the config.php.template to config.php and configure with your data');
}

$configurationData = require_once $basePath . '/config/config.php';
error_reporting(E_ALL);

ini_set('display_errors', true);

$configuration = new \Phalcon\Config($configurationData);

$di = new \Phalcon\DI\FactoryDefault();
$di->setShared('configuration', $configuration);
