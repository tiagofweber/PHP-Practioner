<?php

class Connection
{
    public static function make()
    {
        try {
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '123456');
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}