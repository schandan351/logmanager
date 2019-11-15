<?php
session_start();
if(!isset($_SESSION['email'],$_SESSION['userid'])){
   header("Location:/login-form");
}
use App\App;

$logs = App::get('database')->filter_desc('logs');

// die(var_dump($logs));
require 'view/index.view.php';