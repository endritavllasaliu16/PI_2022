<?php require('partials/head.php'); ?>
<?php require('partials/navProfesori.php'); ?>


<body>
<center>
<div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
<div class="col-md-8" style="position: relative;padding: 20px 20px 20px 20px;">

<?php 
				
	$task=$app['database']->selectAll('detyrat_e_dorezuara');
				
	echo "<h2 class='page-header'>Detajet e Detyrave</h2>";
	echo "<table class='table table-striped table-hover' style='width:100%'>
		  <tr> <th>#</th>
					<th>Detyra No.</th>
					<th>Emri Studentit</th>
					<th>Titulli</th>
					<th>Tekst i detyres</th>
					<th>Uploaded</th>
					<th>Data</th>
					<th>Vleresimi</th>
					<th>Vleresuar nga</th>		
				</tr>";
				$count = 1;
				while($row=mysqli_fetch_array($task))
				{
				?>
			<tr>
				<td>
					<?php echo $count;?>
				</td>
				<td>
					<?php echo $row['ID'];?>
				</td>
				<td>
					<?php echo $row['emri_studentit'];?>
				</td>
				<td>
					<?php echo $row['titulli'];?>
				</td>
				<td>
					<?php echo $row['teksti_detyres'];?>
				</td>
				<td>
					<?php echo $row['foto'];?>
				</td>
				<td>
					<?php echo $row['data_dorezimit'];?>
				</td>
				<td>
					<?php echo $row['vleresimi'];?>
				</td>
				<td>
					<?php echo $row['vleresuarNga'];?>
				</td>
			
			</tr>
			<?php
			$count++;}
			?>	
			</table>
			
</div>
</center>
</body>


  
<?php require('partials/footer.php'); ?>