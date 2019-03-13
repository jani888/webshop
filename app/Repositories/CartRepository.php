<?php

/**
 *
 */
class CartRepository
{

  public static function add($product_id, $amount)
  {
    $products = session('cart');
    $products[] = ['id' => $product_id, 'amount' => $amount];

    session('cart', $products);
  }
}


 ?>
