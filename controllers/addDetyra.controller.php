<?php

session_start();

$user_data = check_login();


require 'views/addDetyra.view.php';



if ( isset( $_POST[ 'submit' ] ) ){
$app['database']->insert('detyrat',[
	'ID_detyra'=>$_POST['IDdetyra'],
	'titulli'=>$_POST['EmriDetyres'],
	'pershkrimi'=>$_POST['PershkrimiDetyres'],
	'deadline'=>$_POST['Deadline'],
	'lenda'=>$_POST['Lenda']
]);
};

?>

