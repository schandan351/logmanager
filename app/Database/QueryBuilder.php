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
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    public function insert($table,$parameters){
        $sql=sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(',',array_keys($parameters)),
            ':'.implode(',:',array_keys($parameters))
        );

       try{
           $statement=$this->pdo->prepare($sql);
           $statement->execute($parameters);
       }catch(Exception $e){
           die('something wents wrongs');
       }
}