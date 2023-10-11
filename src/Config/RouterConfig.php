<?php

namespace  ApiPHP\Config;

use ApiPHP\Controllers\AuthController;
use ApiPHP\Controllers\DashboardController;

class RouterConfig
{
   private static $routes = [];

   public static function addRoute($method, $path, $handler)
   {
      self::$routes[] = [
         'method' => $method,
         'path' => $path,
         'handler' => $handler
      ];
   }

   public static function route($method, $uri)
   {
      foreach (self::$routes as $route) {
         if ($route['method'] === $method && preg_match($route['path'], $uri, $matches)) {
            array_shift($matches); // Hapus elemen pertama (seluruh URI)
            // Panggilan handler rute.
            $route['handler']($matches);
            return;
         }
      }
      // Jika tidak ada rute yang cocok, tampilkan 404 Not Found
      header("HTTP/1.0 404 Not Found");
      echo "404 Not Found";
   }
}

//======================================================================================================================================================================
