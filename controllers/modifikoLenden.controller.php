<?php
session_start();

$user_data = check_login($app['database']);

if($user_data[0]->roli=="student"){
    header("Location: /PI_2022/index.php");
}

$id = $_GET['id'];
$conn = mysqli_connect("localhost", "root", "", "projekti");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM lendet WHERE ID_lenda=$id";
$result = $conn->query($sql);

while($res = mysqli_fetch_array($result))
{
	$ID_lenda = $res['ID_lenda'];
    $emri = $res['emri'];
    $kredi = $res['kredi'];
    $semestri = $res['semestri'];
}
require 'views/modifikoLenden.view.php';


?>