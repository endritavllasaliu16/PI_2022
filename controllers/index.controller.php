<?php

require 'core/functions.php';

session_start();

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $user_email=$_POST['email'];
    $password = $_POST['password'];

    if(
        !empty($user_email) && 
        !empty($password) 
    )
    {
        $user_data = $app['database']->selectUserByEmail($user_email);
        //var_dump($user_data);
       // var_dump($user_data[0]->emri);
        
        if($user_data[0]->password == $password){ 
            $_SESSION['user_id'] = $user_data[0]->user_id;

            if($user_data[0]->roli=="student"){
                header("Location: /PI_2022/index.php/student");
            }else if($user_data[0]->roli=="profesor"){
                header("Location: /PI_2022/index.php/profesor");
            }
        }
            
        echo "Wrong email or password";
    }else{
        echo "Please enter some valid information";
    }
}

require 'Views/index.view.php';