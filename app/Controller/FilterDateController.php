<?php
use App\App;


$arr=[$_POST['filter-date']];

$logs = App::get('database')->filter_date('logs',$arr[0]);

require 'view/index.view.php';

// require 'view/partials/filter.php';