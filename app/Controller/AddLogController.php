<?php

use App\App;

require 'view/logform.view.php';

App::get('database')->insert('logs', [
    'log' => $_POST['logs'],
    'date' => $_POST['date'],
]);

header('Location:/logs');