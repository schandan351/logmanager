<?php

use App\App;
use App\Database\QueryBuilder;
use App\Database\Connection;

App::bind('config',require './config.php');
App::bind('database', require './config/database.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('database'))
));
