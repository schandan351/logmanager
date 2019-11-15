<?php

session_start();
if(!isset($_SESSION['email'])){
   header("Location:/login-form");
}

use App\App;

require 'view/logform.view.php';

App::get('database')->insert('logs', [
    'log' => $_POST['logs'],
    'date' => $_POST['date'],
    'userid'=>$_SESSION['userid']
]);

header('Location:/logs');