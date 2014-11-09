<?php
return array(
    'db' => array(
        'adapters' => array(
            'conftravdb-prod' => array(
                'driver' => 'Pdo_Mysql',
                'database' => getenv('DB_DBNAME'),
                'username' => getenv('DB_USERNAME'),
                'password' => getenv('DB_PASSWORD'),
                'hostname' => getenv('DB_HOST'),
            ),
        ),
    ),
);