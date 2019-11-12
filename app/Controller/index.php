<?php
use App\App;

$logs = App::get('database')->get('logs');

require 'view/index.view.php';
