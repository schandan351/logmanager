<?php

$router->get('', 'app/Controller/AddLogController.php');
$router->get('logs', 'app/Controller/index.php');
$router->get('filter-desc', 'app/Controller/FilterDescController.php');
$router->get('filter-asc', 'app/Controller/FilterAscController.php');


$router->post('addlogs', 'app/Controller/AddLogController.php');
$router->get('delete', 'app/Controller/DeleteLogController.php');
$router->post('update', 'app/Controller/EditLogController.php');

$router->get('edit', 'app/Controller/GetSelectedDataController.php');

$router->post('filter-date', 'app/Controller/FilterDateController.php');

$router->get('','app/Controller/UserController/UserLoginController.php');
$router->post('login','app/Controller/UserController/UserLoginController.php');