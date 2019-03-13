<?php

function base_url(){
  return config('base_url');
}

function str_contains($text, $string){
  return strpos($text, $string) !== false;
}

function base_dir(){
  return dirname(__FILE__);
}

function back(){
  echo $_SERVER['HTTP_REFERER'];
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
