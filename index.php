<?php

require __DIR__ ."/vendor/autoload.php";

$query=require 'app/bootstrap.php';

$databaseConfig = require __DIR__ . "/config/database.php";

$config=require "config.php";

 use App\database\Connection;
 use App\database\QueryBuilder;
 use App\Router;
 use App\Request;


//  $pdo = Connection::make($databaseConfig);

//  $query=new QueryBuilder($pdo);
// var_dump($query->get('logs'));
// die(var_dump($query->filter_desc('logs')));
//  $query->delete('logs',2);
//  die(var_dump($query));


require Router::load('routes.php')
    ->direct(Request::uri(),Request::method());


