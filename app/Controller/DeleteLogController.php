<?php

var_dump($_POST['delete']);
App::get('database')->delete('logs',$_POST['delete']);

header('Location:/');