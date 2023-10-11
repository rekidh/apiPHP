<?php

namespace  ApiPHP\Helpers;

class ResponseApi
{

   protected static $response = [
      "code" => null,
      "message" => null,
      "data" => null
   ];

   public static function create($code = null, $message = null, $data = null)
   {
      self::$response['code'] = $code;
      self::$response['message'] = $message;
      self::$response['data'] = $data;

      http_response_code($code); // Set status HTTP

      return json_encode(self::$response);
   }
}
