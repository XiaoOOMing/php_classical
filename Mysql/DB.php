<?php

class DB
{
    // 数据库配置
    public static $host = '127.0.0.1';
    public static $user = 'root';
    public static $password = 'root';
    public static $db_name = 'deeprocess';
    public static $port = '3306';

    // 连接句柄
    private static $db;

    final private function __construct()
    {
    }
    final private function __clone()
    {
    }

    public static function get()
    {
        if (!self::$db) {
            self::$db = new PDO('mysql:host=' . self::$host . ';port=' . self::$port . ';dbname=' . self::$db_name, self::$user, self::$password);
        }
        return self::$db;
    }
}
