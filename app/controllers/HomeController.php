<?php

/**
 * HomeController
 */
class HomeController extends Controller
{
  function __construct()
  {
    // code...
  }

  public function index()
  {
    $this->showView('home');
  }

}


 ?>
