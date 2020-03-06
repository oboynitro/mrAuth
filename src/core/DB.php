<?php

namespace Oboynitro\MrAuth\Core;
use PDO;
use PDOException;

require_once 'config.php';

class DB
{
    public static function connect()
    {
        try
        {
            $conn = new PDO(
                DB_DRIVER.':host='.DB_HOST.';dbname='.DB_NAME,
                DB_USER,
                DB_PASSWORD
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch(PDOException $e)
        {
            die('Connection failed: ' . $e->getMessage());
        }
        return $conn;
    }
}