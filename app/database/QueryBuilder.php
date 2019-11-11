<?php

namespace App\database;

class QueryBuilder{
    public $pdo;
    public function __contruct($pdo){
        $this->pdo=$pdo;
    }
    public function get($table){
        $statement=$this->pdo->prepare("select * from {$table}");
        $statement->execute();
        // die($statement->fetchAll(PDO::FETCH_CLASS));
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}