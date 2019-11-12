<?php
use App\App;


$logs = App::get('database')->get('logs');
// $logs=App::get('database')->filter_desc('logs');

require 'view/index.view.php';