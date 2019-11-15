 <?php

require __DIR__ . "/vendor/autoload.php";

$query = require 'app/bootstrap.php';

$databaseConfig = require __DIR__ . "/config/database.php";

$config = require "config.php";

use App\Request;
use App\Router;


require Router::load('routes.php')
    ->direct(Request::uri(), Request::method()); 
    