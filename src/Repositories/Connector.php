<?php
    namespace Repositories;


class Connector
{
    private $pdo;

     public function __construct($dataBasename, $user, $pass)
    {
        $this->pdo = new \PDO('mysql:host=localhost; dbname=' . $dataBasename . ';charset=UTF8', $user, $pass);
        if (!$this->pdo) {
            return false;
            //throw new Exception('Error connecting to the database');
        }
    }

    public function getPdo()
    {
        return $this->pdo;
    }

}