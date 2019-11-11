<?php

require __DIR__ ."/vendor/autoload.php";

$config=require "config.php";

 use App\database\Connection;
 use App\database\QueryBuilder;

 $pdo=Connection::make($config);

 $logsquery=new QueryBuilder($pdo);

 $logs=$logsquery->get('logs');

 var_dump($logs);