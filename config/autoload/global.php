<?php
return array(
    'db' => array(
        'adapters' => array(
            'conftravdb-prod' => array(
                'driver' => 'Pdo_Mysql',
                'database' => $_SERVER['DB_DBNAME'],
                'username' => $_SERVER['DB_USERNAME'],
                'password' => $_SERVER['DB_PASSWORD'],
                'hostname' => $_SERVER['DB_HOST'],
            ),
        ),
    ),
);