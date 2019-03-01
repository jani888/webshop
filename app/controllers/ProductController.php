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

  public function index()
  {
    $products = Product::all();
    $this->show('products', ["products" => $products]);
  }
}


 ?>
