<?php

/**
 * CartController
 */
class CartController extends Controller
{
  function __construct()
  {
    // code...
  }

  public function create()
  {
    $product_id = request('product_id');
    $amount = request('amount');

    CartRepository::add($product_id, $amount);

    back();
  }
}


 ?>
