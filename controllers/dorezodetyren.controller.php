<?php
session_start();
$user_data = check_login($app['database']);
$emri_studentit = $user_data[0]->emri;
if($user_data[0]->roli=="profesor"){
    header("Location: /PI_2022/index.php");
}


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $lenda=$_POST['lenda'];
    $semestri=$_POST['semestri'];
    $detajet=$_POST['detajet'];
 $app['database']->insert("detyrat_e_dorezuara",[
            "emri_studentit"=> $emri_studentit,
            "lenda"=> $lenda,
            "semestri"=> $semestri,
            "detajet"=> $detajet,
        ]);
}
  
    // Connect to database 
    $con = mysqli_connect("localhost","root","","projekti");
    if(isset($_POST['delete']))
{
    $id = mysqli_real_escape_string($con, $_POST['ID_detyra']);
    $delete = mysqli_query($con, "DELETE FROM detyrat WHERE ID_detyra=$id");
    header("Location: ../index.php/detyratemia");
}
    // mysqli_connect("servername","username","password","database_name")
   
    // Get all the categories from category table
    $sql = "SELECT * FROM `lendet`";
    $all_lendet = mysqli_query($con,$sql);

    $sql = "SELECT * FROM `detyrat`";
    $all_detyrat = mysqli_query($con,$sql);

        
    
require 'views/dorezodetyren.view.php';