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
        array('route' => '/resultat', 'name'=>'resultat.show','controller' => 'App\Controllers\CandidatController', 'action' => 'resultatAction'),
        array('route' => '/login', 'name'=>'login.show','controller' => 'App\Controllers\LoginController', 'action' => 'login'),
        array('route' => '/resultat-global', 'name'=>'resultat.global','controller' => 'App\Controllers\GlobalResultController', 'action' => 'globalResult'),
        array('route' => '/logout', 'name'=>'logout','controller' => 'App\Controllers\LoginController', 'action' => 'logout'),
        array('route' => '/contrainte', 'name'=>'contrainte','controller' => 'App\Controllers\ContrainteController', 'action' => 'contrainteAction'),
        array('route' => '/edit', 'name'=>'edit','controller' => 'App\Controllers\EditController', 'action' => 'editAction')
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