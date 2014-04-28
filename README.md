zf2skeletondoctrine
===================
ZF2 Skeleton with Doctrine 2 integration

1.
Dont forget php composer.phar update!

2.
For the DB Connection insert the following in one of the config files or create a new one (f.e. config/autoload/database.local.php)

<?php
return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host'     => '127.0.0.1',
                    'port'     => '3306',
                    'user'     => 'USERNAME',
                    'password' => 'PASSWORD',
                    'dbname'   => 'DATABSENAME',
                )
            )
        )
    ),
);

3.

Doctrine under Linux:
./vendor/bin/doctrine-module orm:schema-tool:update

Doctrine under Windows:
php /vendor/bin/doctrine.php orm:schema-tool:update




