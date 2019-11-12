<?php

require __DIR__ ."/vendor/autoload.php";

$query=require 'app/bootstrap.php';

$databaseConfig = require __DIR__ . "/config/database.php";

$config=require "config.php";

 use App\database\Connection;
 use App\database\QueryBuilder;

 $pdo = Connection::make($databaseConfig);

 $query=new QueryBuilder($pdo);
 $query->get('logs');