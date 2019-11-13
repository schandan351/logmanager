<?php

use App\App;


$select_data=App::get('database')->get_selected_data('logs',$_GET['id']);

require "view/edit.view.php";


