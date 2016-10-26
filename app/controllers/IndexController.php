<?php

namespace Controllers;

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{

    public function getConfigurationAction()
    {
        $di = \Phalcon\DI::getDefault();
        $cache = $di->get('cache');

        var_dump($cache->get('xyz'));
        var_dump($cache->get('abc'));

        //setting key with default ttl
        $cache->save('xyz', ['BLABLABLABLABLA']);

        //setting key with defined ttl (2 seconds)
        $cache->save('abc', ['JJJJJJJJJJJJJJJ'], 2);

        var_dump($cache->get('xyz'));
        var_dump($cache->get('abc'));
        echo 'Bem vindo!';
    }
}

