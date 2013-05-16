<?php
/**
 * Bootstrap for phpunit testing.
 * Add server variables (like MSISDN, etc) to simulate transactions.
 **/
define('SUPPRESS_OUTPUT', 'SUPPRESS_OUTPUT');

$path = dirname(__DIR__);
if (empty($_SERVER['SERVER_NAME']))
{
    $info = pathinfo($path);
    $_SERVER['SERVER_NAME'] = $info['basename'];
}

$app_classes = $path . '/classes';
$app_classes = $path . '/classes';


