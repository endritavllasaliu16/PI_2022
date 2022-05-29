<?php
session_start();
include 'connect.php';
$user_data = check_login($app['database']);
$emri_studentit = $user_data[0]->emri;
if($user_data[0]->roli=="profesor"){
    header("Location: /PI_2022/index.php");
}


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $lenda=$_POST['lenda'];
    $titulli=$_POST['titulli'];
    $semestri=$_POST['semestri'];
    $detajet=$_POST['detajet'];
 $app['database']->insert("detyrat_e_dorezuara",[
            "emri_studentit"=> $emri_studentit,
            "titulli"=> $titulli,
            "lenda"=> $lenda,
            "semestri"=> $semestri,
            "detajet"=> $detajet,
        ]);
}
  //$row = $query->fetch(PDO::FETCH_BOTH)
    $all_lendet=$app['database']->selectAll("lendet");
    $all_detyrat = $app['database']->selectAll("detyrat");
        
    
require 'views/dorezodetyren.view.php';