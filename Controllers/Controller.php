<?php
/**
 * Created by PhpStorm.
 * User: Martin Laundl
 * Date: 28.05.2018
 * Time: 14:25
 */

class Controller extends Database
{
    public static function CreateView($viewName){
        require_once("./Views/$viewName.php");
    }
}