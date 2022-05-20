<?php
session_start();

var_dump($_SERVER['REQUEST_METHOD']);


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_first_name=$_POST['first_name'];
    $user_last_name=$_POST['last_name'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    var_dump($user_first_name,$user_last_name,$username,$password);
    
    if(!empty($user_first_name) && !empty($user_last_name) && !empty($username) &&!empty($password) )
    {
        $app['database']->insert("perdoruesi",[
            "user_id"=>"35",
            "emri"=>$user_first_name,
            "mbiemri"=>$user_last_name,
            "roli"=>"profesor",
            "email"=>"profesor@gmail.com",
            "passwordi"=>$password
        ]);
    }else{
        echo "Please enter some valid information!";
    }
}

require 'views/register.view.php';