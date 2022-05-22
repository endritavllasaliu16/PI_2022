<?php
session_start();

$user_data = check_login($app['database']);

if($user_data[0]->roli=="student"){
    header("Location: /PI_2022/index.php");
}

$tasks=$app['database']->selectDetyraByVleresimi("detyrat_e_dorezuara");
			
require 'views/controllDetyra.view.php';