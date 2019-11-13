<?php
use App\App;

App::get('database')->delete('logs', $_GET['id']);

header('Location:/logs');
