<?php

$di->setShared(
    'db', 
    function() use($configuration) {
        return new DbAdapter(
            [
                "host" => $config->get('database')->host,
                "username" => $config->get('database')->username,
                "password" => $config->get('database')->password,
                "dbname" => $config->get('database')->dbname
            ]
        );
    }
);

