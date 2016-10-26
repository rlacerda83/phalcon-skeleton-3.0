<?php

use Phalcon\Mvc\Micro;

try {
    require 'config/loader.php';
    require 'config/services.php';

    $app = new Micro($di);

    $indexController = new \Controllers\IndexController();
    $app->get('/configuration', array($indexController, "getConfigurationAction"));

    $app->notFound(function () use ($app) {
        $app->response->setStatusCode(404, "Not Found")->sendHeaders();
        echo 'This is crazy, but this page was not found!';
    });

    $app->handle();

} catch (Phalcon\Exception $e) {
    echo $e->getMessage();
} catch (PDOException $e){
    echo $e->getMessage();
}