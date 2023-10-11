<?php

namespace  ApiPHP\Routers;

use ApiPHP\Controllers\AuthController;
use ApiPHP\Controllers\DashboardController;
use ApiPHP\Config\RouterConfig;

$router = new RouterConfig();
// Rute untuk login
RouterConfig::addRoute('POST', '#^/login$#', function () {
   echo AuthController::login();
});


// class Router
// {
//    private static $routes = [];

//    public static function addRoute($method, $path, $handler)
//    {
//       self::$routes[] = [
//          'method' => $method,
//          'path' => $path,
//          'handler' => $handler
//       ];
//    }

//    public static function route($method, $uri)
//    {
//       foreach (self::$routes as $route) {
//          if ($route['method'] === $method && preg_match($route['path'], $uri, $matches)) {
//             array_shift($matches); // Hapus elemen pertama (seluruh URI)
//             // Panggilan handler rute.
//             $route['handler']($matches);
//             return;
//          }
//       }
//       // Jika tidak ada rute yang cocok, tampilkan 404 Not Found
//       header("HTTP/1.0 404 Not Found");
//       echo "404 Not Found";
//    }
// }

// //======================================================================================================================================================================

// // Definisikan rute-rute
// $router = new Router();\



// Rute untuk login
// $router->addRoute('POST', '#^/login$#', function () {
//    // Panggil fungsi atau metode untuk menangani permintaan login
//    echo AuthController::login();
// });

// // Rute untuk register
// $router->addRoute('POST', '#^/register$#', function () {
//    echo AuthController::register();
// });

// // Rute untuk dashboard
// $router->addRoute('GET', '#^/dashboard$#', function () {
//    echo DashboardController::menu();
// });

// $router->addRoute('GET', '#^/details.*$#', function () {  //memberikan '.*' pada regex router akan mengizinkan rout menerima paramater
//    echo AuthController::login();
// });
