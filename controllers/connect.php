<?php
$mysqli = mysqli_connect("localhost:3307", "root", "", "projekti");
if ($mysqli->connect_error) {
die("Connection failed: " . $mysqli->connect_error);
}
?>