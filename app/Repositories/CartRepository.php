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

  public static function remove($product_id){
      $products = session('cart');
      $to_remove = array_first(array_filter($products, function ($product) use($product_id){
          return $product['id'] == $product_id;
      }));
      $index = array_search($to_remove, $products);
      unset($products[$index]);
      session('cart', $products ?? []);
  }

  public static function getTotal(){
      $products = self::getAll();
      $sum = 0;
      foreach($products as $product){
          $sum += $product->amount * $product->price;
      }
      return $sum;
  }

  public static function getAll(){
      $cart = session('cart');
      if($cart == null) return [];
      $products = [];
      foreach($cart as $item){
          $product = Product::find($item['id']);
          $product->amount = $item['amount'];
          $products[] = $product;
      }
      return $products;
  }
}


 ?>
