<?php
$mysqli = mysqli_connect("localhost:3308", "root", "root", "projekti");
if ($mysqli->connect_error) {
die("Connection failed: " . $mysqli->connect_error);
}
?>