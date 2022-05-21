<?php require('partials/head.php'); ?>

 <?php require('partials/navProfesori.php'); ?>

 <?php
	$connection = mysqli_connect("localhost:3308", "root", "root", "projekti");
	$make = $_GET[ 'makeid' ];
	$sql = "SELECT * FROM detyrat_e_dorezuara WHERE ID=$make";
    $result = $connection->query($sql);
	while ( $row = $result->fetch_assoc() ) {
	?>
    <fieldset>
		<legend>Make Result</legend>
		<form action="" method="POST" name="makeresult">
		<table class="table table-hover">
    	<tr>
            <td><strong>Enrolment number  </strong></td>
			<td> <?php $eno=$row['ID']; echo $eno; ?> </td>
        </tr>
		<tr>
			<td><strong>Exam ID:</strong> </td>
			<td><?php $ExamID= $row['titulli']; echo $ExamID; ?></td>
		</tr>
		<tr>
			<td><strong>Marks</strong> </td>
			<td>
			    <select class="form-control" name="marks" required>
					<option value="">---Select---</option>
					<option value="Pass">Pass</option>
					<option value="Fail">Fail</option>
					<option value="Under Progress">Under Progress</option>
				</select>
			</td>
		</tr>
		<td><button type="submit" name="make" class="btn btn-success" style="border-radius:0%">Publish</button> </td>
		<?php
			}
		?>
		<?php 
        if($_SERVER['make'] == "POST")	{
		$mark= $_SERVER['marks'];

	   $sql="INSERT INTO `detyrat_e_vleresuara`(`ID`, `titulli`,'vleresimi') VALUES ($ID, '$emri_studentit' ,'$mark')";
		if (mysqli_query($connect, $sql)) {
					echo "
		     		<br><br>
							<div class='alert alert-success fade in'>
							<a href='ResultDetails.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<strong>Success!</strong> Result Updated.
							</div>
							";
							} else {
								//error message if SQL query fails
							echo "<br><Strong>Result Updation Faliure. Try Again</strong><br> Error Details: " . $sql . "<br>" . mysqli_error($connect);

							//close the connection
							mysqli_close($connect);
							}
							}
							?>
					</table>
				</form>
			</fieldset>
		</div>
 
<?php require('partials/footer.php'); ?>