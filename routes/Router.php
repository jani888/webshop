<?php
/**
 *
 */
class Router
{

  public static function route($uri)
  {
    $routes = self::routes();
    $redirect = self::class . "::handle";
    array_walk($routes, function ($route) use ($uri, $redirect){
      if($uri == $route['uri']) return call_user_func($redirect, $route, $uri);
      if(!str_contains($route['uri'], ':')){
        return;
      }
      $uri_tokens = explode('/', $uri);
      $route_tokens = explode('/', $route['uri']);

      if(count($uri_tokens) != count($route_tokens)) return;

      foreach ($route_tokens as $index => $token) {
        if($token[0] == ":"){
          return call_user_func($route, $uri, $uri_tokens[$index]);
        }
        if($token != $uri_tokens[$indxe]) return;
      }
    });
  }

  private static function handle($route, $uri, $params = []){
    require sprintf("%s/app/controllers/%s.php", base_dir(), $route['controller']);
    $controller = new $route['controller']();
    $controller->{$route['method']}($params);
  }

  private static function routes()
  {
    return [
        ["type" => "GET", "uri" => "", "controller" => "HomeController", "method" => "index"],
        ["type" => "GET", "uri" => "products", "controller" => "ProductController", "method" => "index"],
        ["type" => "GET", "uri" => "products/:id", "controller" => "ProductController", "method" => "show"],
    ];
  }
}

 ?>
