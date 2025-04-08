<?php

$initialRoute = getenv('INITIAL_ROUTE');

echo $initialRoute;

$databaseConfig = [
    'host'     => getenv('DATABASE_HOST') ?: 'localhost',
    'username' => getenv('DATABASE_USER') ?: 'root',
    'password' => getenv('DATABASE_PASSWORD') ?: 'dualipin',
    'database' => getenv('DATABASE_NAME') ?: 'sigepia',
];

define('DB_HOST', $databaseConfig['host']);
define('DB_USERNAME', $databaseConfig['username']);
define('DB_PASSWORD', $databaseConfig['password']);
define('DB_DATABASE', $databaseConfig['database']);
define('INITIAL_ROUTE', $initialRoute ? ($initialRoute === '/' ? '' : $initialRoute) : '');
define('ASSETS_IMG', INITIAL_ROUTE . '/assets/img');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
