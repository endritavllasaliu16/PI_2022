<?php

return [
    'database' => [
        'name' => 'projekti',
        'username' => 'root',
        'password' => 'root',
        'connection' => 'mysql:host=127.0.0.1:3308',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
