<?php

$initialRoute = getenv('INITIAL_ROUTE');

define('INITIAL_ROUTE', $initialRoute ? ($initialRoute === '/' ? '' : $initialRoute) : '');
define('ASSETS_IMG', INITIAL_ROUTE . '/assets/img');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
