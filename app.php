<?php
require 'App\Repositories\CartRepository.php';
final class App
{
  public function run()
  {
    ini_set('short_open_tag', 1);
    session_start();

    Config::load();
    $this->provideCart();
    Router::route($_GET['uri']);
  }

  private function provideCart(){
      ViewComposer::provide('cart', function (){
          //Eskü nem rontottam el :(
          return CartRepository::getAll();
      });
  }
}

 ?>
