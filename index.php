<?php

use Phalcon\Loader;
use Phalcon\Mvc\Micro;
use Phalcon\Di\FactoryDefault;

$loader = new Loader();

$loader->registerNamespaces(
    array(
        "Models"    => __DIR__ . '/app/models',
        "Services"    => __DIR__ . '/app/services',
        "Controllers"    => __DIR__ . '/app/controllers',
    )
);

$loader->register();

$app = new Micro();

// Retrieves configuration data
$indexController = new \Controllers\IndexController();
$app->get('/configuration', array($indexController, "getConfigurationAction"));

$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
    echo 'This is crazy, but this page was not found!';
});

$app->handle();