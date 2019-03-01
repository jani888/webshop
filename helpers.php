<?php

function base_url(){
  return "http://localhost/php/gagyi_webshop";
}

function str_contains($text, $string){
  return strpos($text, $string) !== false;
}

function base_dir(){
  return dirname(__FILE__);
}
?>
