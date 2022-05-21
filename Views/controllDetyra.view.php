<?php require('partials/head.php'); ?>
<?php require('partials/navProfesori.php'); ?>
 <body>
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
 <div class="container"  style="position: relative;padding: 20px 20px 20px 20px;">
 <h5> Detajet e detyrave </h5>
</div>
<br>
<br>
<?php 
	echo "<table class='table table-striped table-hover' style='width:100%'>
			<tr>
			<th>#</th>
			<th>ID</th>
			<th>Studenti</th>
			<th>Titulli</th>
			<th>Pershkrim</th>
			<th>Upload</th>
			<th>Data e dorezimit</th>
			<th>Vleresimi</th>		
			</tr>";
			$cnt = 1;
	$connection = mysqli_connect("localhost", "root", "root", "projekti");
	$sql = "SELECT ID, emri_studentit, titulli, teksti_detyres, foto, data_dorezimit FROM detyrat_e_dorezuara";
    $result = $connection->query($sql);
    while($row = $result->fetch_assoc())	{
				?>
			<tr>
				<td>
					<?PHP echo $cnt;?>
				</td>
				<td>
					<?PHP echo $row['ID'];?>
				</td>
				<td>
					<?PHP echo $row['emri_studentit'];?>
				</td>
				<td>
					<?PHP echo $row['titulli'];?>
				</td>
				<td>
					<?PHP echo $row['teksti_detyres'];?>
				</td>
				<td>
					<?PHP echo $row['foto'];?>
				</td>
				<td>
					<?PHP echo $row['data_dorezimit'];?>
				</td>
			
				<td>
				<a href="controllDetyra2.php?editassid"> <input type="button" Value="Vlereso"  class="btn btn-success btn-sm" style="border-radius:0%"  data-toggle="modal" data-target="#myModal"></a>
				</td>
			</tr>
			<?php
		$cnt++;	}
			?>	
			</table>


</div>
</center>
</body>
  
  
<?php require('partials/footer.php'); ?>