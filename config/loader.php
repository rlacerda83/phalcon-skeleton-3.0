<?php

use Phalcon\Loader;

$loader = new Loader();

$loader->registerNamespaces(
    array(
        "Models"    => __DIR__ . '/../app/models',
        "Services"    => __DIR__ . '/../app/services',
        "Controllers"    => __DIR__ . '/../app/controllers',
    )
);

$loader->register();