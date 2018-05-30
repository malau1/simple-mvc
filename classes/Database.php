<?php
/**
 * Created by PhpStorm.
 * User: Martin Laundl
 * Date: 28.05.2018
 * Time: 14:45
 */

class Database
{
    public static $host = "192.168.65.130";
    public static $dbName = "SocialNetwork";
    public static $username = "user";
    public static $password = "test";

    private static function connect(){
        $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";",self::$username,self::$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public static function query($query, $params = array()) {
        $statement = self::connect()->prepare($query);
        $statement->execute($params);
        if (explode(' ', $query)[0] == 'SELECT'){
            $data = $statement->fetchAll();
            return $data;
        } else {
            return '';
        }
    }
}