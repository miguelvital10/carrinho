<?php

namespace app\database;

use PDOException;

class Connect{
    private static $pdo = null;

    public static function connect()
    {
        try {
            
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }
}