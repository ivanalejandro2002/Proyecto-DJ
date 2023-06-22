<?php
session_start();

if(isset($_SESSION['TxtUsr'])){ 
  $TxtUsr = $_SESSION['TxtUsr'];
  $TxtPsw = $_SESSION['TxtPsw'];
  
}else{
  header("location:admin.php");
  
}
?>
<?php require 'php/header.php'; ?>

  <div class="grey darken-vacio">

    <div class="container">
      <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a class="active" href="#C">C</a></li>
          <li class="tab col s3"><a href="#R">R</a></li>
          <li class="tab col s3 disabled"><a href="#U">U</a></li>
          <li class="tab col s3"><a href="#D">D</a></li>
        </ul>
      </div>
      <div id="C" class="col s12"><?php require 'php/C.php'?></div>
      <div id="R" class="col s12">Test 2</div>
      <div id="U" class="col s12">Test 3</div>
      <div id="D" class="col s12">Test 4</div>
  </div>

    </div>
  </div>


  <?php require 'php/footer.php'; ?>