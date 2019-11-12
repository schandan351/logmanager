<?php
use App\App;
// $data=require "config/database.php";
// die(var_dump($data));

$logs = App::get('database')->get('logs');



require 'view/index.view.php';