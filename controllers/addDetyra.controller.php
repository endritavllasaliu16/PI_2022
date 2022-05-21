<body>
    <center>
<?php

//session_start();

//$user_data = check_login();


require 'views/addDetyra.view.php';

 
 $connect = mysqli_connect("localhost:3308", "root", "root", "projekti");
  
 // Check connection
 if($connect === false){
     die("ERROR: Could not connect to the database. "
         . mysqli_connect_error());
 }
  
 $ID_detyra =  $_REQUEST['IDdetyra'];
 $titulli = $_REQUEST['EmriDetyres'];
 $pershkrimi =  $_REQUEST['PershkrimiDetyres'];
 $deadline = $_REQUEST['Deadline'];
 $lenda = $_REQUEST['Lenda'];
  
 $sql = "INSERT INTO detyrat  VALUES ('$ID_detyra',
     '$titulli','$pershkrimi','$deadline','$lenda')";
  
 //if(mysqli_query($connect, $sql)){
//  echo "<h4>Detyra u ruajt me sukses!</h4>";
// } else{
//     echo "ERROR: Hush! Sorry $sql. "
//         . mysqli_error($connect);
// }

  
 mysqli_close($connect);
 ?>

</center>
 <body>