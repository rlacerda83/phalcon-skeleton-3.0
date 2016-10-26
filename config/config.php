<?php


$config = new \Phalcon\Config(array(
    "database" => array(
        "adapter" => "Mysql",
        "host" => "127.0.0.1",
        "username" => "root",
        "password" => "123mudar",
        "dbname" => "uello"
    )
));

return $config;