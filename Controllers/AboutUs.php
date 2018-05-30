<?php
/**
 * Created by PhpStorm.
 * User: Martin Laundl
 * Date: 28.05.2018
 * Time: 14:26
 */

class AboutUs extends Controller
{
    public static function test(){
        print_r(self::query("SELECT * FROM users"));
    }
}
