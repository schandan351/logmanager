<?php

use App\App;
use App\Database\Connection;
use App\Database\QueryBuilder;

App::bind('config', require './config.php');
App::bind('database', require './config/database.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('database'))
));
