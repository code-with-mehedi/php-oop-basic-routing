<?php

return [
    'database' => [
        'dbname' => 'todo',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1:3330',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];
