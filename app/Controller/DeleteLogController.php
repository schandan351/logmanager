<?php
App::get('database')->delete('logs',$_POST['id']);

header('Location:/');