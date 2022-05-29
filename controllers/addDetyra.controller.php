<body>
    <center>
<?php

include 'connect.php';
session_start();

$user_data = check_login($app['database']);

if($user_data[0]->roli=="student"){
    header("Location: /PI_2022/index.php");
}


 
//  $connect = mysqli_connect("localhost", "root", "root", "projekti");
  
//  // Check connection
//  if($connect === false){
//      die("ERROR: Could not connect to the database. "
//          . mysqli_connect_error());
//  }
if($_SERVER['REQUEST_METHOD'] == "POST"){
 $ID_detyra =  $_REQUEST['IDdetyra'];
 $titulli = $_REQUEST['titulli'];
 $pershkrimi =  $_REQUEST['pershkrimi'];
 $deadline = $_REQUEST['deadline'];
 $lenda = $_REQUEST['lenda'];
  
 $app['database']->insert("detyrat",[
            "ID_detyra"=>$ID_detyra,
            "titulli"=> $titulli,
            "pershkrimi"=>$pershkrimi,
            "deadline"=> $deadline,
            "lenda"=> $lenda,
        ]);
}

 $data= $app['database']->selectIDDetyra("detyrat");
// $sql = "SELECT ID_detyra FROM detyrat";
// $result = $mysqli->query($sql);
// if ($result->num_rows > 0) {
// // output data of each row
// while($row = $result->fetch_assoc()) {
//   $ID_detyra = $row['ID_detyra'] + 1;
// }
// }
// else{
//   $ID_detyra = 1;
// }
//  $sql = "INSERT INTO detyrat  VALUES ('$ID_detyra',
//      '$titulli','$pershkrimi','$deadline','$lenda')";
  

 //if(mysqli_query($connect, $sql)){
//  echo "<h4>Detyra u ruajt me sukses!</h4>";
// } else{
//     echo "ERROR: Hush! Sorry $sql. "
//         . mysqli_error($connect);
// }

  
 //mysqli_close($connect);
require 'views/addDetyra.view.php';
 ?>

</center>
 <body>