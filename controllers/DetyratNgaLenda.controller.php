<?php
session_start();
include 'connect.php';

$user_data = check_login($app['database']);

if($user_data[0]->roli=="profesor"){
    header("Location: /PI_2022/index.php");
}

$emri = $_GET['emri'];
$sql = "SELECT titulli, pershkrimi, deadline FROM detyrat WHERE lenda=$emri";
$result = $mysqli->query($sql);

while($res = mysqli_fetch_array($result))
{
    $titulli = $res['titulli'];
    $pershkrimi = $res['pershkrimi'];
    $deadline = $res['deadline'];
}
require 'views/DetyratNgaLenda.view.php';