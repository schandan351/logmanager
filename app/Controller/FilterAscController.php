<?php
use App\App;

$logs = App::get('database')->filter_asc('logs');

// die(var_dump($logs));
require 'view/index.view.php';