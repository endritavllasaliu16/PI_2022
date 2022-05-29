<?php
$mysqli = mysqli_connect("localhost", "root", "root", "projekti");
if ($mysqli->connect_error) {
die("Connection failed: " . $mysqli->connect_error);
}
?>