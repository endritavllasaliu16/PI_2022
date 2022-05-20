<?php require('partials/head.php'); ?>

<?php require('partials/navProfesori.php'); ?>

<body>
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
<div class="col-md-8" style="position: relative;padding: 20px 20px 20px 20px;">

   <fieldset>
		<legend>Shto Detyren</legend>
			<form action="" method="GET" name="AddAssessment">
				<table class="table table-hover" style="margin: left 100px;">
				<tr>
					<td> <strong> Titulli i detyres  </strong> </td>
					<td> <input type="text" name="EmriDetyres"> </td>
                </tr>
				<tr>
				    <td> <strong> Pershkrimi i detyres </strong> </td>
				    <td> <textarea name="PershkrimiDetyres" rows="5" cols="150"></textarea> </td>
				</tr>
				<tr>
				    <td> <strong> Deadline </strong> </td>
				    <td> <input type="date" name="Deadline"> </td>
				</tr>
				<tr>
					<td> <strong> Lenda </strong> </td>
					<td> <textarea name="Lenda" rows="5" cols="150"></textarea> </td>
				</tr>
				<tr>
					<td><strong> ID e detyres  </strong> </td>
					<td> <input type="number" name="IDdetyra"> </td>
				</tr>
				<td> <button type="submit" name="submit" class="btn btn-success" style="border-radius:0%">Ruaj</button> </td>
				</table>
			</form>
	</fieldset>
</div>
</div>
</center>
</body>



 
<?php require('partials/footer.php'); ?>