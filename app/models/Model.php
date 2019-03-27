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

  public static function all()
  {
    $table = self::tableName();
    return self::getConnection()->query("SELECT * FROM $table")->fetchAll(PDO::FETCH_CLASS, static::class);
  }

  public static function find($id)
  {
    $table = self::tableName();
    return self::getConnection()->query("SELECT * FROM $table WHERE id = '$id'")->fetchObject(static::class);
  }

  protected static function tableName(){
    //ex.: Product => products
    return lcfirst(static::class) . 's';
  }

  public static function create($values)
  {
    $table = self::tableName();

    $keys = array_keys($values);
    $params = "";
    foreach ($keys as $field) {
      $params .= " :$field,";
    }
    $params = rtrim($params,",");
    $fields = implode(', ', $keys);

    print_r("INSERT INTO $table ($fields) VALUES ($params)");
    $stmt= self::getConnection()->prepare("INSERT INTO $table ($fields) VALUES ($params)");
    $stmt->execute($values);

    echo "\nPDO::errorInfo():\n";
    print_r($stmt->errorInfo());

  }
}


 ?>
