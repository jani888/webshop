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
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}

function redirect($url){
  header('Location: ' . $url);
}


function array_first($array){
    reset($array);
    return current($array);
}
