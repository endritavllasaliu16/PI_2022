<?php require('partials/head.php'); ?>
<body>
 <?php require('partials/nav.php'); ?>
<center>     
            <div class="card" style="max-width: fit-content;padding: 5px 15px 15px 15px;">
                <h5>Dorezo detyren: </h5>
                <br>
              <span>Detajet e detyres:</span>
              <input type="text">
              <br>
              <br>
                  
  <button class="btn grey waves-effect" onclick="document.getElementById('file').click()">Ngarko</button>
  <br>
  <br>
  <input type='file' id="file" style="display:none" multiple 
       onchange="javascript:updateList()">
<br/>Selected files:
<div id="fileList"></div>
                  <br>
                  <br>
                  <button class="btn red waves-effect">Dorezo</button>
          </div>

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
</script>
<?php require('partials/footer.php'); ?>