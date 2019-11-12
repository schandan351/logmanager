<?php

$router->get('', 'app/Controller/AddLogController.php');
$router->get('logs', 'app/Controller/index.php');
$router->get('filter-desc', 'app/Controller/FilterDescController.php');

$router->post('addlogs', 'app/Controller/AddLogController.php');
$router->get('delete', 'app/Controller/DeleteLogController.php');
$router->post('edit', 'app/Controller/EditLogController.php');