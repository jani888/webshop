<?php

/**
 *
 */
class Session
{

  public static function get($key, $default = null){
    return $_SESSION[$key] ?? $default;
  }

  public static function set($key, $value){
    $_SESSION[$key] = $value;
  }
}

function session($key, $value = null){
  if($value === null){
    return session_get($key);
  }
  session_set($key, $value);
}

function session_get($key, $default = null){
  return Session::get($key, $default);
}

function session_set($key, $value){
  return Session::set($key, $value);
}
?>
