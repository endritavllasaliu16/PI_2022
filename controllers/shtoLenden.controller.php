<?php
session_start();

$user_data = check_login($app['database']);

// if($user_data[0]->roli=="student"){
//     header("Location: /PI_2022/index.php");
// }

// $conn = mysqli_connect("localhost", "root", "root", "projekti");
// // Check connection
// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }
$sql = "SELECT ID_lenda, emri, kredi, semestri FROM lendet";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
  $ID_lenda = $row['ID_lenda'] + 1;
}
}
else{
  $ID_lenda = 1;
}

require 'views/shtoLenden.view.php';

  ?>
