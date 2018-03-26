<?php
  session_start();

  include "checkreset.php";
  include 'connectdb.php' ;
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900|Domine:400,700" rel="stylesheet">
      <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
			<!-- Font awesome-->
	  <link href="css/font-awesome.min.css" rel="stylesheet">
       <!-- animation on slide -->
    <link href="aos-master/dist/aos.css" rel="stylesheet">
			<!-- Ma feuille de style perso-->
	  <link href="css/style.css" rel="stylesheet">

		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="aos-master/dist/aos.js"></script>
	  <!-- Hotjar Tracking Code -->


  </head>
  <body>
    <div class="row">
      <div class="col-md-3">
      </div>
        <div class="connexion col-md-6">
    <div class="row">
      <img class="col-md-3" src="images/crous.png" alt="crous" class="img-responsive" width="200px">
    <h4 class="col-md-7 titre"> Espace de connexion</h4>
</div>

<?php
  include "all.php";
?>
</div>
</div>
</body>
