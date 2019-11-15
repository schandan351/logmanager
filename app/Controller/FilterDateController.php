<?php

session_start();
if(!isset($_SESSION['email'],$_SESSION['userid'])){
   header("Location:/login-form");
}

use App\App;


$arr=[$_POST['filter-date']];


$logs = App::get('database')->filter_date('logs',$arr[0]);



require 'view/index.view.php';

// require 'view/partials/filter.php';