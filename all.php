<?php
  if(isset($_POST["reset"]))
  {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit;
  }

  if (!isset($_SESSION["login"]) && !isset($_SESSION["password"]))
  {
    if (isset($_POST["login"]) && isset($_POST["password"]))
    {

      if ($_POST["submit"]=="enregistrement")
      {
        $sql = "INSERT INTO utilisateurs (login, pass) VALUES ('" .$_POST["login"]. "','" .$_POST["password"]. "')";

        if($result2 = mysqli_query($conn, $sql))
        {
          $_SESSION["login"] = $_POST["login"];
          $_SESSION["password"] = $_POST["password"];
          header('Location: ?');
          exit;
        }
        else
        {
          header('Location: ?log=allex');
          exit;
        }
        mysqli_close($conn);
      }

      if($_POST["submit"]=="connexion")
      {
        $sql = "SELECT id FROM utilisateurs WHERE login='".$_POST["login"]."' AND pass='".$_POST["password"]."'";
        echo "connexion";
        $result2 = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result2)>0)
        {
          $_SESSION["login"] = $_POST["login"];
          $_SESSION["password"] = $_POST["password"];

          header('Location: ?');
          exit;
        }
        else
        {
          header('Location: ?log=nonex');
          exit;
        }
        mysqli_close($conn);
      }
    }

    echo "


    <form action='#' method='post'>
  <div class='form-group row'>
    <label for='inputlogin' class='col-sm-2 col-form-label'>Login</label>
    <div class='col-sm-10'>
      <input type='text' class='form-control' id='inputlogin' placeholder='login' name='login' required>
    </div>
  </div>
  <div class='form-group row'>
    <label for='inputPassword' class='col-sm-2 col-form-label'>Mot de passe</label>
    <div class='col-sm-10'>
      <input type='password' class='form-control' id='inputPassword' placeholder='Mot de passe' name='password' required>
    </div>
  </div>

        <input class='btn btn-primary' type='submit' name='submit' value='connexion'/>
        <input class='btn btn-primary' type='submit' name='submit' value='enregistrement'/>
      </div>
    ";

      if(isset($_GET["log"]))
      {
        if($_GET["log"]=="allex")
          echo "Ce login est déja utilisé";
        if($_GET["log"]=="nonex")
          echo "Ce compte n'existe pas ou mot de passe incorrect";
      }

    echo "</form>";
  }
  else
  {
    if(isset($_GET["log"]))
    {
      header('Location: ?');
      exit;
    }

    echo "
    <div>
        <p> Bonjour ".$_SESSION["login"]."! </p>
    </div>
    ";

    echo "
      <form action='?' method='post'>
        <input type='submit' name='reset' value='deconnexion'/>
      </form>";
  }
?>
