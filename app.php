<?php
final class App
{
  public function run()
  {
    ini_set('short_open_tag', 1);
    session_start();

    Config::load();
    Router::route($_GET['uri']);
  }
}

 ?>
