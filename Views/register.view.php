<?php require ('partials/head.php'); ?>
<body style="background: #eee;">
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
    <div class="container">
      <br><br>
      <div class="card"style="position: relative;padding: 20px 20px 20px 20px;">
      <center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/University_of_Prishtina_logo.svg/2053px-University_of_Prishtina_logo.svg.png" width="150px" height="150px"></center>
      <div class="row">
    <center><form class="col s12" method="post">
      <div class="row">
        <div class="input-field col s12">
          <input type="text" id="first_name" name="first_name" type="text" class="validate">
          <label for="first_name">Emri</label>
        </div>
        <div class="row">
        <div class="input-field col s12">
          <input id="last_name" name="last_name" type="text" class="validate">
          <label for="last_name">Mbiemri</label>
        </div>
      </div>
      <div class="row">
<<<<<<< HEAD
=======
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Konfirmo Email</label>
        </div>
      </div>
      <div class="row">
>>>>>>> d58be3626e8c34f3dd7eb4ef8e8b7bb620c045b8
        <div class="input-field col s12">
          <input id="username" name="username" type="text" class="validate">
          <label for="email">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
<<<<<<< HEAD
     <div class="row">
       <label for="radio" style="font-size:18px">Roli</label>
        <p>
          <label>
            <input name="group1" type="radio" checked id="student_radio" onChange="check()" value="student"/>
            <span>Student</span>
          </label>
          <label>
            <input name="group1" type="radio" id="profesor_radio" onChange="check()" value="profesor"/>
            <span>Profesore</span>
          </label>
        </p>
      </div>
      <div class="row" id="id_input" style="visibility:visible">
=======
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Konfirmo Password</label>
        </div>
      </div>
      <div class="row">
        <span>Roli: </span>
        <br>
        <br>
      <label>
        <input name="group1" class="red" type="radio"  />
        <span>Student</span>
        <input name="group1" class="red" type="radio" checked />
        <span>Profesor</span>
      </label>
    </div>
      <div class="row">
>>>>>>> d58be3626e8c34f3dd7eb4ef8e8b7bb620c045b8
        <div class="input-field col s12">
          <input id="id" name="id" type="number" class="validate">
          <label for="id">ID</label>
        </div>
      </div>
<<<<<<< HEAD
      <div class="row" id="index_input" style="visibility:hidden">
        <div class="input-field col s12">
          <input id="index" name="index" type="number" class="validate" >
          <label for="index">Indeksi</label>
=======
          <div class="row">
        <div class="input-field col s12">
          <input id="index" name="index" type="number" class="validate">
          <label for="index">Index</label>
>>>>>>> d58be3626e8c34f3dd7eb4ef8e8b7bb620c045b8
        </div>
      </div>
      <button class="btn-floating btn-large waves-effect waves-light red" type="submit"><i class="material-icons" >add</i></button>
    </form></center>
  </div>
  </div>
</div>
</center>
<br>
<br>

<script>
  var id_input = document.querySelectorAll("#id_input");
  var index_input = document.querySelectorAll("#index_input");
  var student_radio = document.querySelectorAll("#student_radio");
  var profesor_radio = document.querySelectorAll("#profesor_radio");

  function check(){
  if(student_radio[0].checked){
    index_input[0].style.visibility = "hidden";
      id_input[0].style.visibility = "visible";
      console.log("s");
    }

  if(profesor_radio[0].checked){
      id_input[0].style.visibility = "hidden";
      index_input[0].style.visibility = "visible";
      console.log("p");
    }
  }
</script>
<?php require ('partials/footer.php'); ?>