<?php
session_start();

$user_data = check_login($app['database']);


require 'views/student.view.php';