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
    $this->showView('products', ["products" => $products]);
  }

  public function show($id)
  {
    $product = Product::find($id);
    $this->showView('product', ["product" => $product]);
  }
}


 ?>
