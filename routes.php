<?php

$router->get('','app/Controller/index.php');
$router->post('addlogs','app/Controller/AddLogController.php');
$router->delete('delete','app/Controller/DeleteLogController.php');