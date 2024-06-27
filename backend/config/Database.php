<?php

class Database {

    private static $connection;

    public static function getConnection(){

        if (!self::$connection){
            self::$connection = new mysqli('localhost', 'root', '', 'pruebatecnica');
            if (self::$connection -> connect_error){

                die("Connection failed: " . self::$connection -> connect_error);
            }
        }

        return self::$connection;
    }

}

?>