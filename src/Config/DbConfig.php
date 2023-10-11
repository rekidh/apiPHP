<?php

namespace  ApiPHP\Config;

class DbConfig
{
   private $host = 'localhost'; // Ganti sesuai dengan host MySQL Anda
   private $username = 'root'; // Ganti sesuai dengan username MySQL Anda
   private $password = ''; // Ganti sesuai dengan password MySQL Anda
   private $database = 'nama_database'; // Ganti sesuai dengan nama database Anda

   protected $connection;

   public function __construct()
   {
      if (!isset($this->connection)) {
         $this->connection = new \mysqli($this->host, $this->username, $this->password, $this->database);

         if (!$this->connection) {
            echo 'Koneksi ke database gagal: ' . mysqli_connect_error();
            exit;
         }
      }

      return $this->connection;
   }
}
