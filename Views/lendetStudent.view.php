<?php require('partials/head.php'); ?>

 <?php require('partials/nav.php'); ?>
 <body>
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
 <div class="container"  style="position: relative;padding: 20px 20px 20px 20px;">
	<div class="row">
		<div class="col-md-12 text-center">
          <a href="shtoLenden.view.php"><button  href="" type="submit" class="btn btn-primary" style="border-radius:10%">Shto Lenden</button></a>
		</div>
	</div>
</div>
<br>
<br>
<div class="row">
<table>
<tr>
<th>Id e Lendes</th>
<th>Emri</th>
<th>Kredite</th>
<th>Semestri</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "root", "projekti");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT ID_lenda, emri, kredi, semestri FROM lendet";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["ID_lenda"]. "</td><td>" . $row["emri"] . "</td><td>"
	. $row["kredi"]. "</td><td>" . $row["semestri"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</div>
</center>
</body>
  
<?php require('partials/footer.php'); ?>