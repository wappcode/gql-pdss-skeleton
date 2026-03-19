<?php

/**
 * Copy and rename file to doctrine.local.php
 */
return [
    "driver" => [
        'user'     =>   getenv("PDSSLIB_DBUSER") ?: '',
        'password' =>   getenv("PDSSLIB_DBPASSWORD") ?: '',
        'dbname'   =>   getenv("PDSSLIB_DBNAME") ?: '',
        'driver'   =>   'pdo_mysql',
        'host'   =>     getenv("PDSSLIB_DBHOST") ?: 'localhost',
        'charset' =>    'utf8mb4'
    ],
    "entities" => require __DIR__ . "/doctrine.entities.php"
];
