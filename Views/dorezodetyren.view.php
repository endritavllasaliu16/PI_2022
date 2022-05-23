<?php require('partials/head.php'); ?>
<body>
 <?php require('partials/nav.php'); ?>
<center>    
  <form method="POST">
            <div class="card" style="max-width: fit-content;padding: 5px 15px 15px 15px;">
                <h5>Dorezo detyren: </h5>
                <br>
            
   <label>Zgjedh lenden e regjistruar</label>
  <select name="lenda" class="browser-default" required>
    <?php 
                while ($lendet = mysqli_fetch_array(
                        $all_lendet,MYSQLI_ASSOC)):;
    ?>
                <option value="<?php echo $lendet["ID_lenda"];?>">
                    <?php echo $lendet["emri"];?>
                </option>
            <?php 
                endwhile;
            ?>
  </select>
  <br>
     <label>Zgjedh semestrin</label>
  <select name="semestri"class="browser-default" required>
    <option value="" disabled selected>Semestri</option>
    <option value="Semestri 3">Semestri 1</option>
    <option value="Semestri 3">Semestri 2</option>
    <option value="Semestri 3">Semestri 3</option>
    <option value="Semestri 4">Semestri 4</option>
  </select>
  <br>
     <label>Zgjedh detyren</label>
  <select name="detyrat"class="browser-default" required>
    <?php 
                while ($detyrat = mysqli_fetch_array(
                        $all_detyrat,MYSQLI_ASSOC)):; 
    ?>
                <option value="<?php echo $detyrat["ID_detyra"];?>">
                    <?php echo $detyrat["titulli"];?>
                </option>
            <?php 
                endwhile; 
            ?>
  </select>
  <br>       
  <input type="text" name="detajet" placeholder="Detajet e detyres">
  <br>
  <br> 
  <button name="delete" class="btn red waves-effect">Dorezo</button>
  <br>
  <br>
  <label>Shif detyrat e dorezuara <a href="">ketu</a></label>
          </div>
</form>
</center>
</body>
<script type="text/javascript">
  updateList = function() {
  var input = document.getElementById('file');
  var output = document.getElementById('fileList');

  output.innerHTML = '<ul>';
  for (var i = 0; i < input.files.length; ++i) {
    output.innerHTML += '<li>' + input.files.item(i).name + '</li>';
  }
  output.innerHTML += '</ul>';
}
const select = mdc.select.MDCSelect.attachTo(document.querySelector('.mdc-select'));
select.listen('MDCSelect:change', () => {
  console.log(select.selectedIndex, select.value);
});
</script>
<?php require('partials/footer.php'); ?>