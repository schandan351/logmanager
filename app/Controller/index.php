<?php

session_start();
if(!isset($_SESSION['email'])){
   header("Location:/login-form");
}
use App\App;

$logs = App::get('database')->get('logs');

require 'view/index.view.php';
