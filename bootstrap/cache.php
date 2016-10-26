<?php

use Phalcon\Cache\Backend\Redis;
use Phalcon\Cache\Frontend\Data;

$frontCache = new Data(['lifetime' => $configuration->get('cache')->lifetime]);
$cache = new Redis(
    $frontCache,
    [
        'host' => $configuration->get('cache')->redis->host,
        'port' => $configuration->get('cache')->redis->port,
        'persistent' => false,
        'index' => $configuration->get('cache')->redis->index,
    ]
);

$di->setShared('cache', $cache);
