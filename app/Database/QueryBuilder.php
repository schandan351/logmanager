<?php

namespace App\Database;

use PDO;

class QueryBuilder
{
    public $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function get($table)
    {
        $statement = $this->pdo->prepare("select * from {$table} where userid={$_SESSION['userid']}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(',', array_keys($parameters)),
            ':' . implode(',:', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die('something wents wrongs');
        }
    }

    public function get_selected_data($table,$id){
        $sql="select log,date from {$table} where id={$id}";
        $statement = $this->pdo->prepare($sql);

        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
       
    }

    public function update($table,$logs,$date,$id)
    {
        $sql = "update {$table} set log=?, date=? where id=?";
           
       
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute(array($logs, $date,$id));
        } catch (Exception $e) {
            die('something wents wrongs');
        }
    }

    public function delete($table, $id)
    {
        try {
            $statement = $this->pdo->prepare("delete from {$table} where id ={$id}");
            $statement->execute();
        } catch (Exception $e) {
            die('delete operation failed');
        }
    }

    public function filter_desc($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}  where userid={$_SESSION['userid']} order by date desc");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function filter_asc($table)
    {
        $statement = $this->pdo->prepare("select * from {$table} where userid={$_SESSION['userid']} order by date asc ");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function filter_date($table,$selecteddate){
        // die(var_dump($_SESSION['userid']));
        $statement=$this->pdo->prepare("select * from $table where date='$selecteddate' and userid={$_SESSION['userid']} ");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    // for user

    public function check_user($table,$email){
        $sql=" SELECT * FROM {$table} WHERE email='{$email}' ";
        $statement=$this->pdo->prepare($sql);
        // $statement->bindValue(':email', $email);
        $statement->execute() ;
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}

// array($email,$password)