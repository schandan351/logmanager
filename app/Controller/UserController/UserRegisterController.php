<?php

use App\App;

session_start();
require 'view/login/register.view.php';

if(isset($_POST['register'])){

    $email=!empty($_POST['email'])?trim($_POST['email']):null;
    $firstname=!empty($_POST['firstname'])?trim($_POST['firstname']):null;
    $lastname=!empty($_POST['lastname'])?trim($_POST['lastname']):null;
    $password=!empty($_POST['password'])?trim($_POST['password']):null;

    $user = App::get('database')->check_user('user',$email);

    if($user==true){
        die('user already exists');
    }else{
        $passwordhash=password_hash($password,PASSWORD_BCRYPT, array("cost" => 12));
        // die(var_dump(['password'=>$passwordhash]));

        App::get('database')->insert('user', [
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'email' => $_POST['email'],
            'password' =>$passwordhash,
        ]);

        echo "Thanks for registrations";
    }

    

}






// require 'view/login/register.view.php';