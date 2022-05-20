<?php
session_start();

$user_data = check_login();




require 'views/profesor.view.php';