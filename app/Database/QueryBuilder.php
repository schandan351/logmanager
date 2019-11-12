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
        $statement = $this->pdo->prepare("select * from {$table}");
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

    public function update($table, $logs, $date, $id)
    {
        $sql = "update {$table} SET log={$logs} ,date={$date} where id={$id}";
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
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
        $statement = $this->pdo->prepare("select * from {$table} order by date desc");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}