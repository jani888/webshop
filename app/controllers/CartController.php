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

  public function delete(){
      $product_id = request('id');

      CartRepository::remove($product_id);

      back();
  }
}


 ?>
