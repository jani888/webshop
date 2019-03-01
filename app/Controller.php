<?php

/**
 * Base controller
 */
class Controller
{

  function __construct()
  {
    // code...
  }

  public function showView($view_name, $props = [])
  {
    ob_start();
    extract($props);
    include sprintf("%s/public/views/%s.php", base_dir(), $view_name);
    $html = ob_get_clean();
    echo $html;
  }
}
 ?>
