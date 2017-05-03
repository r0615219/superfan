<?php
abstract class Db
{
    private static $conn = null;

    public static function getInstance()
    {
        if (isset(self::$conn)) {
            return self::$conn;
        } else {
            self::$conn = new PDO('mysql:host=localhost; dbname=superfan', 'root', '');
            return self::$conn;
        }
    }
}