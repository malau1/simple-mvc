<?php
/**
 * Created by PhpStorm.
 * User: Martin Laundl
 * Date: 28.05.2018
 * Time: 14:16
 */

class Route
{
    public static $validRoutes = array();

    public static function set($route,$function){

        self::$validRoutes[] = $route;

        if($_GET['url'] == $route){
            $function->__invoke();
        }

    }

}