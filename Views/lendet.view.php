<?php require('partials/head.php'); ?>

 <?php require('partials/nav.php'); ?>

 <body>
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
    <div class="container">
      <br><br>
      <div class="card"style="position: relative;padding: 20px 20px 20px 20px; left: 150px;">
      <div class="row">
    <center><form class="col s12">
    <div class="row">
        <div class="input-field col s12">
          <input id="lenda_id" type="number" class="validate" min="1">
          <label for="lenda_id">ID e Lendes</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type="text" id="subject_name" type="text" class="validate">
          <label for="subject_name">Emri i lendes</label>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="credits" type="number" class="validate" min="3" max="8">
          <label for="credits">Kredite e lendes</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="semestri" type="number" class="validate" min="1" max="2">
          <label for="semestri">Semestri</label>
        </div>
      </div>
      <button class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></button>
    </form></center>
  </div>
  </div>
</div>
</center>
<br>
<br>
  
<?php require('partials/footer.php'); ?>