<?php

use App\App;

require 'view/login/login.view.php';
session_start();
if(isset($_POST['login'])){
    $email=!empty($_POST['email'])? trim($_POST['email']):null;
    $password=!empty($_POST['password'])? trim($_POST['password']):null;
    $user = App::get('database')->check_user('user',$email);

    if($user==false){
        die('fields are null');
    }else{
             
        foreach($user as $users){
            $validpassword=password_verify($password,$users->password);
            if($validpassword){
                $_SESSION['email']=$users->email;
                $_SESSION['firstname']=$users->firstname;

                $_SESSION['logged_in']=time();
                header('Location:/logs');
                exit;
            }else{
                echo ("<h1 class='container'>");
                    die('username or password not matched');
                echo("</h1>");
            }
        }
        
       
       
    }
    
}



