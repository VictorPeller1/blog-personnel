<?php

$routes = array(
  '/' => 'HomeController@index',
  '/post' => 'PostController@index',
);

$url = $_SERVER['REQUEST_URI'];

if (array_key_exists($url, $routes)) {
  $controllerAction = explode('@', $routes[$url]);
  $controllerName = $controllerAction[0];
  $actionName = $controllerAction[1];

  require_once(__DIR__ . "/../app/controllers/" . $controllerName . '.php');

  $controller = new $controllerName();

  $controller->{$actionName}();
} else {
  echo "404 - Page introuvable";
}

