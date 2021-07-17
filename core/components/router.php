<?php


$route      = 'home';
$action     = null;
$param      = null;

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';
if($url[0] != '/') $route   = $url[0];
if($url[1] != '/') $action  = $url[1];
if($url[2] != '/') $param   = $url[2];

$template = $route;
if($action != null) $template = $action;


require_once __DIR__ . '/../../src/Models/' . $route . '.php';
require_once __DIR__ . '/../../src/Controllers/' . $route . '.php';

$modelName          = ucfirst($route) . 'Model';
$controllerName     = ucfirst($route) . 'Controller';

$model      = New $modelName();
$controller = New $controllerName($model);
$view       = $controller->render($action, $param);


?>
