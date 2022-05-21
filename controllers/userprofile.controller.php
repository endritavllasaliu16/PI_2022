<?php
require 'core/functions.php';

session_start();

$user_data = check_login($app['database']);

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirm_password=$_POST['password_confirm'];
    $user_id=$user_data[0]->user_id;
   
    
    if(
        !empty($username) &&
        !empty($password) &&
        !empty($user_id) &&
        validatePassword($password,$confirm_password) 
     )
    {
        $app['database']->updateUserProfile($user_id, $username,$password,$confirm_password);
        $user_data[0]->roli=="student"? header("Location: /PI_2022/index.php/student"):header("Location: /PI_2022/index.php/profesor") ;
    }else{
        echo "Please enter some valid information!";
    }
}

require 'views/userprofile.view.php';