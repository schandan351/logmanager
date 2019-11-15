<?php

session_start();
if(!isset($_SESSION['email'])){
   header("Location:/login-form");
}


use App\App;



$arr=['log' => $_POST['logs'],'date'=>$_POST['date']];

App::get('database')->update('logs',$arr['log'],$arr['date'],$_GET['id']);

require "view/edit.view.php";


header('Location:/logs');