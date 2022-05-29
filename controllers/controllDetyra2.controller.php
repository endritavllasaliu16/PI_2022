<?php
//session_start();

//$user_data = check_login();
include "connect.php";

session_start();

$user_data = check_login($app['database']);

if($user_data[0]->roli=="student"){
    header("Location: /PI_2022/index.php");
}
$last_visited;
if(isset($_COOKIE["Lastvisit"])){
    // var_dump($_COOKIE["Lastvisit"]);
    // die;
    $last_visited = $_COOKIE["Lastvisit"];
}

$id = $_GET['id'];
$sql = "SELECT * FROM detyrat_e_dorezuara WHERE ID=$id";
$result = $mysqli->query($sql);

while($res = mysqli_fetch_array($result))
{
    $emri_studentit = $res['emri_studentit'];
    $titulli = $res['titulli'];
    $lenda = $res['lenda'];
    $semestri = $res['semestri'];
    $detajet = $res['detajet'];
    $foto = $res['foto'];
    $vleresimi = $res['vleresimi'];
    $data_dorezimit = $res['data_dorezimit'];
}

if(isset($_POST['update']))
{	

$id = mysqli_real_escape_string($mysqli, $_POST['ID']);
$emri_studentit = mysqli_real_escape_string($mysqli, $_POST['emri_studentit']);
$titulli = mysqli_real_escape_string($mysqli, $_POST['titulli']);
$lenda = mysqli_real_escape_string($mysqli, $_POST['lenda']);
$semestri = mysqli_real_escape_string($mysqli, $_POST['semestri']);
$detajet = mysqli_real_escape_string($mysqli, $_POST['detajet']);
$foto = mysqli_real_escape_string($mysqli, $_POST['foto']);	
$vleresimi = mysqli_real_escape_string($mysqli, $_POST['vleresimi']);
$data_dorezimit = mysqli_real_escape_string($mysqli, $_POST['data_dorezimit']);
if(empty($vleresimi) || empty($emri_studentit) || empty($titulli)) {	
if(empty($vleresimi)) {
echo '<font color="red">Vlersimi field is empty.</font><br>';
}
if(empty($titulli)) {
echo '<font color="red">Title field is empty.</font><br>';
}
if(empty($emri_studentit)) {
echo '<font color="red">Emri field is empty.</font><br>';
}		
} else {	
$result = mysqli_query($mysqli, "UPDATE detyrat_e_dorezuara SET vleresimi='$vleresimi' WHERE ID=$id");
header("Location: ../index.php/vleresimetProfesor");
}
}

require 'views/controllDetyra2.view.php';