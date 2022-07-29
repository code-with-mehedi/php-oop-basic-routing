<?php
/**
 * Connection class is dedicated to handle the database connection dynamically.
 */
 
class Connection 
{

    public static function make($config) {
        try {
            return new PDO(
                $config['connection'] . ';dbname=' . $config['dbname'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}