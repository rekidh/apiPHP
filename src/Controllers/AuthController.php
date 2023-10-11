<?php

namespace  ApiPHP\Controllers;

use ApiPHP\Helpers\ResponseApi;
use ApiPHP\Config\DbConfig;

class AuthController
{


   public static function login()
   {
      $dataInput = json_decode(file_get_contents('php://input'), true); //mendapatkan data yang di kirim dari metod post
      $dataQuery = strval($dataInput['email']);

      $db = new DbConfig();
      $query = "SELECT * FROM users WHERE email='$dataQuery'";

      $result = $db->connection->query($query);
      $res = [];
      if ($result) {
         while ($row = $result->fetch_assoc()) {
            // $row hasil dari database berbetuk array 
            $res = ["name" => $row['nama'], "email" => $row['email'], "pass" => $row['password']];
         }
      } else {
         echo 'Kueri SQL gagal: ' . $db->connection->error;
      }
      //untuk menutup koneksi database ketika selesai
      $db->connection->close();


      return ResponseApi::create(200, 'OK', $res);
   }

   public static function  register()
   {
      $data = json_decode(file_get_contents('php://input'), true);

      $response = ['message' => 'Registrasi berhasil'];
      echo json_encode($response);
   }
}
