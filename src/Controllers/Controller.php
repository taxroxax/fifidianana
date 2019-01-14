<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 11/01/19
 * Time: 22:52
 */

namespace App\Controllers;


use App\Web\Route;

class Controller {

    private $route;

    public function render($viewName,$parameters = array()){
        ob_start();
        extract($parameters, EXTR_SKIP);
        include sprintf(__DIR__.'/../../views/%s.php', $viewName);
        return ob_get_clean();
    }

    public function redirect($routeName){
        if($selected_route = $this->route->findByName($routeName)){
            $controller = new $selected_route['controller'];
            $action = $selected_route['action'];
            return $controller->$action();
        }
    }

    public function __construct(){
        $this->route = new Route();
    }


} 