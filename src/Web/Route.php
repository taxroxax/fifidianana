<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 11/01/19
 * Time: 22:34
 */

namespace App\Web;


class Route
{

    private $routes = array(
//        array('route'=>'/','controller'=> 'App\Controllers\HomeController', 'action' => 'index'),
        array('route' => '/hello', 'name'=>'hello','controller' => 'App\Controllers\HomeController', 'action' => 'hello'),
        array('route' => '/', 'name'=>'candidat.list', 'controller' => 'App\Controllers\CandidatController', 'action' => 'listAction'),
        array('route' => '/bulletin/save', 'name'=>'bulletin.save','controller' => 'App\Controllers\BulletinController', 'action' => 'saveBulletin'),
        array('route' => '/resultat', 'name'=>'resultat.show','controller' => 'App\Controllers\CandidatController', 'action' => 'resultatAction')
    );

    public function findByPath($route)
    {
        foreach ($this->routes as $r) {
            if ($r['route'] == $route) {
                return $r;
            }
        }
        return false;
    }

    public function findByName($route)
    {
        foreach ($this->routes as $r) {
            if ($r['name'] == $route) {
                return $r;
            }
        }
        return false;
    }

} 