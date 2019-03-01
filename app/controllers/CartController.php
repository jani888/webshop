<?php

/**
 * HomeController
 */
class ProductController extends Controller
{
  function __construct()
  {
    // code...
  }

  public function create()
  {
    $product_id = request('product_id');
    $amount = request('amount');

    $products = session('cart');
    $products[] = ['id' => $product_id, 'amount' => $amount];
    
    session('cart', $products);
  }
}


 ?>
