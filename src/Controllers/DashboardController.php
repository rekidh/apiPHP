<?php

namespace  ApiPHP\Controllers;

use ApiPHP\Helpers\ResponseApi;

class DashboardController
{
   function menu()
   {
      $api_key = isset($_SERVER['HTTP_X_API_KEY']) ? $_SERVER['HTTP_X_API_KEY'] : '';

      // Validasi kunci API
      function validateApiKey($api_key)
      {
         $valid_api_keys = ['api_key_1', 'api_key_2']; // Gantikan dengan daftar kunci API yang sah
         return in_array($api_key, $valid_api_keys);
      }

      // Periksa kunci API di setiap permintaan
      if (!validateApiKey($api_key)) {
         $response = ['error' => 'Kunci API tidak valid'];
         http_response_code(401); // Unauthorized
         echo json_encode($response);
         exit;
      }

      $data = json_decode(file_get_contents('php://input'), true);

      // Lakukan validasi data, simpan ke database, dll.
      // Contoh sederhana:
      $response = ['message' => 'Registrasi berhasil'];
      echo json_encode($response);
   }
}
