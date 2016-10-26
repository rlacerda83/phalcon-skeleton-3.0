<?php

$basePath = realpath(dirname(__DIR__));

$loader = new \Phalcon\Loader();

$loader->registerNamespaces(
    array(
        'Models'        => $basePath . '/app/models',
        'Services'      => $basePath . '/app/services',
        'Controllers'   => $basePath . '/app/controllers',
    )
);

//$loader->registerNamespaces(
    //require($basePath . '/vendor/composer/autoload_namespaces.php')
//);
//$loader->registerClasses(
    //require($basePath . '/vendor/composer/autoload_classmap.php')
//);
$loader->register();
