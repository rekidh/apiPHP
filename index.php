<?php

require_once __DIR__ . '/vendor/autoload.php';

use ApiPHP\Routers\Router;
use ApiPHP\Config\RouterConfig;

header('Content-Type: application/json');

$request_uri = $_SERVER['REQUEST_URI'];
$request_method = $_SERVER['REQUEST_METHOD'];

// Route permintaan saat ini
RouterConfig::route($request_method, $request_uri);
