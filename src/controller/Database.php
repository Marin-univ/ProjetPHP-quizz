<?php

namespace controller;

class Database
{
    private static $connection = null;

    public static function getConnection()
    {
        if (self::$connection === null) {
            try {
                self::$connection = new \PDO('mysql:host=servinfo-maria;dbname=DBfonteny','fonteny','fonteny');
                self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                error_log('Erreur de connexion : ' . $e->getMessage());
                die('Erreur de connexion à la base de données.');
            }
        }
        return self::$connection;
    }
}
