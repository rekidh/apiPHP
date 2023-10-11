<?php

namespace  ApiPHP\Controllers;

use ApiPHP\Helpers\ResponseApi;
use ApiPHP\Config\DbConfig;

class AuthController
{


   public  function login()
   {
      $db = new DbConfig();

      $query = "SELECT * FROM nama_tabel";
      $result = $db->connection->query($query);

      if ($result) {
         while ($row = $result->fetch_assoc()) {
            // Lakukan sesuatu dengan data dari database
            echo $row['kolom_sesuai'];
         }
      } else {
         echo 'Kueri SQL gagal: ' . $db->connection->error;
      }

      // Jangan lupa untuk menutup koneksi database ketika selesai
      $db->connection->close();


      $data = json_decode(file_get_contents('php://input'), true);
      return ResponseApi::create(200, 'OK', ['message' => $_GET]);
   }

   function register()
   {
      $data = json_decode(file_get_contents('php://input'), true);

      // Lakukan validasi data, simpan ke database, dll.
      // Contoh sederhana:
      $response = ['message' => 'Registrasi berhasil'];
      echo json_encode($response);
   }
}
