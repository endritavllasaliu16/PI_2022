<?php require('partials/head.php'); ?>
<?php require('partials/navProfesori.php'); ?>
 <body>
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
<div class="col-md-8" style="position: relative;padding: 20px 20px 20px 20px;">

   <fieldset>
 <h5> Detajet e detyrave </h5>
 <table class='table table-striped table-hover' style='width:100%'>
			<tr>
			<th>ID</th>
			<th>Studenti</th>
			<th>Titulli</th>
			<th>Pershkrim</th>
			<th>Upload</th>
			<th>Data e dorezimit</th>
			<th>Vleresimi</th>		
<br>
<br>
<?php 
	$connection=$app['database']->selectDetyraByVleresimi("detyrat_e_dorezuara");
    $connection=array_map(function ($task)	{
		$value=$task['ID'];

				?>
			<tr>
				<td>
					<?PHP echo $value;?>
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
				<a href="controllDetyra2?makeid"> <input type="button" Value="Vlereso"  class="btn btn-success btn-sm" style="border-radius:0%"  data-toggle="modal" data-target="#myModal"></a>
				</td>
			</tr>
			<?php
	}, $connection);	
			?>	
			</table>


</div>
</center>
</body>
  
  
<?php require('partials/footer.php'); ?>