<body>
    <center>
<?php


session_start();

$user_data = check_login($app['database']);

if($user_data[0]->roli=="student"){
    header("Location: /PI_2022/index.php");
}


require 'views/addDetyra.view.php';

 
//  $connect = mysqli_connect("localhost", "root", "root", "projekti");
  
//  // Check connection
//  if($connect === false){
//      die("ERROR: Could not connect to the database. "
//          . mysqli_connect_error());
//  }
  
 $ID_detyra =  $_REQUEST['IDdetyra'];
 $titulli = $_REQUEST['EmriDetyres'];
 $pershkrimi =  $_REQUEST['PershkrimiDetyres'];
 $deadline = $_REQUEST['Deadline'];
 $lenda = $_REQUEST['Lenda'];
  
 $app['database']->insert("detyrat",[
            "ID_detyra"=>$ID_detyra,
            "titulli"=> $titulli,
            "pershkrimi"=>$pershkrimi,
            "deadline"=> $deadline,
            "lenda"=> $lenda,
        ]);
//  $sql = "INSERT INTO detyrat  VALUES ('$ID_detyra',
//      '$titulli','$pershkrimi','$deadline','$lenda')";
  
 //if(mysqli_query($connect, $sql)){
//  echo "<h4>Detyra u ruajt me sukses!</h4>";
// } else{
//     echo "ERROR: Hush! Sorry $sql. "
//         . mysqli_error($connect);
// }

  
 //mysqli_close($connect);
 ?>

</center>
 <body>