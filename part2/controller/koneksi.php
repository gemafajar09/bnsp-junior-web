<?php

class Database {
    private static $dbHost = "localhost";
    private static $dbUsername = "root";
    private static $dbPassword = "";
    private static $dbName = "db_sekolah";

    private static $connect = null;

    public function __construct()
    {
        die("Fungsi ini tidak di izinkan");
    }

    public static function connect()
    {
        if( null == self::$connect)
        {
            try {
                self::$connect = new mysqli(self::$dbHost, self::$dbUsername, self::$dbPassword, self::$dbName);
            } catch (Throwable $e) {
                die($e->getMessage());
            }
        }
        return self::$connect;
    }

    public static function disconect()
    {
        self::$connect = null;
    }
}