<?php require ('partials/head.php'); ?>
<body style="background: #eee;">
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
    <div class="container">
      <br><br>
      <div class="card"style="position: relative;padding: 20px 20px 20px 20px;">
      <center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/University_of_Prishtina_logo.svg/2053px-University_of_Prishtina_logo.svg.png" width="150px" height="150px"></center>
      <div class="row">
    <center><form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input type="text" id="first_name" type="text" class="validate">
          <label for="first_name">Emri</label>
        </div>
        <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Mbiemri</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="username" type="text" class="validate">
          <label for="email">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
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
<?php require ('partials/footer.php'); ?>