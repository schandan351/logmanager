<?php

App::get('database')->insert('logs',[
    'log'=>$_POST['log'],
    'date'=>$_POST['date']
]);

header('Location:/');