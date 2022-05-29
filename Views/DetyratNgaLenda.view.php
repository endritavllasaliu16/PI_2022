<?php require('partials/head.php'); ?>

 <?php require('partials/nav.php'); ?>

 <body>
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
 <div class="container"  style="position: relative;padding: 20px 20px 20px 20px;">
  <h5> Detyrat ne baze te lendes </h5>
</div>
<br>
<br>
<div class="row">
<table id="myTable" style="padding: 20px 20px 20px 20px;">
<tr>
<th>Lenda</th>
<th>Pershkrimi</th>
<th>Titulli</th>
<th>Data e dorezimit</th>
</tr>
<?php
foreach($result as $value){
	?>
<tr>
	<td>
	<?php echo $value $_GET['emri']; ?>
	</td>
	<td>
      <?php echo $value['pershkrimi']; ?>
	</td>
	<td>
		<?PHP echo $value['titulli'];?>
	</td>
	<td>
		<?PHP echo $value['deadline'];?>
	</td>
</tr>
<?php
}	
?>
</div>
</center>
</body>

<?php require('partials/footer.php'); ?>
