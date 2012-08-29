<?php
/**
 * Bootstrap for phpunit testing.
 * Add server variables (like MSISDN, etc) to simulate transactions.
 **/
define('SUPPRESS_OUTPUT', 'SUPPRESS_OUTPUT');

if (empty($_SERVER['SERVER_NAME']))
{
    $path = pathinfo(dirname(__DIR__));
    $_SERVER['SERVER_NAME'] = $path['basename'];
}