<?php
/**
 *
 */
class Product extends Model
{
  public static function all()
  {
    return self::getConnection()->query("SELECT * FROM products")->fetchAll(PDO::FETCH_OBJ);
  }
}

 ?>
