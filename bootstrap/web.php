<?php 

use Phalcon\Mvc\Micro;

try {
    $di->set('router', 'Phalcon\Mvc\Router');
    $di->set('request', 'Phalcon\Http\Request');
    $di->set('response', 'Phalcon\Http\Response');

    $app = new Micro($di);

    $indexController = new \Controllers\IndexController();

    $app->get('/configuration', [$indexController, 'getConfigurationAction']);

    $app->notFound(function () use ($app) {
        $app->response->setStatusCode(404, "Not Found")->sendHeaders();
        echo 'This is crazy, but this page was not found!';
    });

    $app->handle();

} catch (\Exception $e) {
    var_dump($e->getTraceAsString());
} catch (Phalcon\Exception $e) {
    var_dump($e->getTraceAsString());
}
