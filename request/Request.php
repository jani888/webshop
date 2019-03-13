<?php

/**
 *
 */
class Request
{
  public static function method(){
    return $_SERVER['REQUEST_METHOD'];
  }

  public static function get($key){
    return $_REQUEST[$key];
  }
}

function request($key, $default = null)
{
  return Request::get($key) ?? $default;
}


 ?>
