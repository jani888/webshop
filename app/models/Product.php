<?php
/**
 *
 */
class Product extends Model
{
  public function price()
  {
    return number_format($this->price/100.0, 2, '.', ' ') . " Ft";
  }
  public function url() {
    return base_url() . '/products/' . $this->id;
  }
  public function shortDescription($length = 110)
  {

    if(strlen($this->description) <= $length) return $this->description;
    return substr($this->description, 0, $length) . "...";
  }
}

 ?>
