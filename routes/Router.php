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
      if($uri == $route['uri'] && Request::method() == $route['type']) return call_user_func($redirect, $route, $uri);
      if(!str_contains($route['uri'], ':')){
        return;
      }
      $uri_tokens = explode('/', $uri);
      $route_tokens = explode('/', $route['uri']);

      if(count($uri_tokens) != count($route_tokens) || $_SERVER['REQUEST_METHOD'] != $route['type']) return;

      foreach ($route_tokens as $index => $token) {
        if($token[0] == ":"){
          return call_user_func($redirect, $route, $uri, $uri_tokens[$index]);
        }
        if($token != $uri_tokens[$index]) return;
      }
    });
    echo "404";
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

        ["type" => "POST", "uri" => "cart", "controller" => "CartController", "method" => "create"],
        ["type" => "POST", "uri" => "cart/remove", "controller" => "CartController", "method" => "delete"],

        ["type" => "GET", "uri" => "checkout", "controller" => "CheckoutController", "method" => "index"],
        ["type" => "POST", "uri" => "checkout", "controller" => "InvoiceController", "method" => "create"],

        ["type" => "GET", "uri" => "invoice/:id", "controller" => "InvoiceController", "method" => "show"],
    ];
  }
}

 ?>
