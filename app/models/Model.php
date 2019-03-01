<?php
/**
 * Base model
 */
class Model
{
  static $pdo;

  public static function getConnection()
  {
    if(self::$pdo != null) return self::$pdo;
    self::$pdo = new PDO(sprintf('mysql:host=localhost;dbname=%s;charset=utf8mb4', config('database.name')), config('database.username'), config('database.password'));
    return self::$pdo;
  }
}


 ?>
