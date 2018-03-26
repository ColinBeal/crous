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



  </head>
  <body>
    <div class="row barrenav navbar-collapse">
    <div class="container-fluid">
      <div class="col-md-3">
        <a href="monespace.php"><img src="images/crous.png" alt="crous" class="img-responsive" width="50px"></a>
      </div>
      <div class="col-md-7 col-sm-hidden col-xs-hidden nav">
      </div>
        <div class="col-md-2 col-sm-hidden col-xs-hidden nav">
        <a href="index.php">Déconnexion </a>
      </div>
    </div>

    <div class=" row">
      <div class="col-md-6 bleuf">
          <h2> Bonjour </h2>

      </div>
        <div class="col-md-4 jaune">
          <h2> Mes Infos </h2>

</div>
</div>
    </body>
