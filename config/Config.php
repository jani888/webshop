<?php
/**
 *
 */
final class Config
{
  public static $configs = [];

  public static function load()
  {
    self::$configs['database'] = json_decode(file_get_contents(sprintf('%s/config/database.json', base_dir())));
  }

  public static function get($config, $key)
  {
    return self::$configs[$config]->{$key};
  }
}

function config($key)
{
  $keys = explode('.', $key);
  return Config::get(count($keys)>1 ? $keys[0] : 'config', $keys[1] ?? $keys[0]);
}
 ?>
