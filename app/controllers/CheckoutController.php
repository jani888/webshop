<?php

/**
 * CartController
 */
class CheckoutController extends Controller
{
  function __construct()
  {
    // code...
  }

  function index(){
      $total_price = CartRepository::getTotal();
      $this->showView('checkout', ['total_price' => $total_price]);
  }
}


 ?>
