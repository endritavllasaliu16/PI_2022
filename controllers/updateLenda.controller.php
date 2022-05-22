<?php
session_start();

$user_data = check_login($app['database']);

if($user_data[0]->roli=="student"){
    header("Location: /PI_2022/index.php");
}
require 'views/updateLenda.view.php';

$mysqli = mysqli_connect("localhost", "root", "root", "projekti");
if ($mysqli->connect_error) {
die("Connection failed: " . $mysqli->connect_error);
}

if(isset($_POST['delete']))
{
    $id = mysqli_real_escape_string($mysqli, $_POST['ID_lenda']);
    $delete = mysqli_query($mysqli, "DELETE FROM lendet WHERE ID_lenda=$id");
    header("Location: ../index.php/lendet");
}

if(isset($_POST['update']))
{	

$id = mysqli_real_escape_string($mysqli, $_POST['ID_lenda']);
$emri = mysqli_real_escape_string($mysqli, $_POST['emri']);
$kredi = mysqli_real_escape_string($mysqli, $_POST['kredi']);
$semestri = mysqli_real_escape_string($mysqli, $_POST['semestri']);	
if(empty($emri) || empty($kredi) || empty($semestri)) {	
if(empty($emri)) {
echo '<font color="red">Name field is empty.</font><br>';
}
if(empty($kredi)) {
echo '<font color="red">Credits field is empty.</font><br>';
}
if(empty($semestri)) {
echo '<font color="red">Semestri field is empty.</font><br>';
}		
} else {	
$result = mysqli_query($mysqli, "UPDATE lendet SET emri='$emri',kredi='$kredi',semestri='$semestri' WHERE ID_lenda=$id");
}
}
?>