<?php

die(var_dump($_GET['id']));

require "view/edit.view.php";

// App::get('database')->update('logs', [
//     'log' => $_POST['logs'],
//     'date' => $_POST['date'],
// ]);

header('Location:/logs');