<?php

namespace App\Database;

use App\Database\Connection;
use PDO;

class QueryBuilder{
    public $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function get($table){
        $statement=$this->pdo->prepare("select * from {$table}");
        $statement->execute();
        $statement->fetchAll(PDO::FETCH_CLASS);
    }
}