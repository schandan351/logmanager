<?php
session_start();
if(!isset($_SESSION['email'],$_SESSION['userid'])){
   header("Location:/login-form");
}
use App\App;

App::get('database')->delete('logs', $_GET['id']);

header('Location:/logs');
