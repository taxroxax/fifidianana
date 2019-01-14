<?php
require('../vendor/autoload.php');

$path_info = $_SERVER['PATH_INFO'];

$route = new \App\Web\Route();
if($selected_route = $route->findByPath($path_info)){
    $controller = new $selected_route['controller'];
    $action = $selected_route['action'];
    echo $controller->$action();
}
else{
    echo '404 not foud';
}