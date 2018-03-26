<?php
  include "checkreset.php";

  if (!isset($_SESSION["login"]) && !isset($_SESSION["password"]))
  {
    if (isset($_POST["login"]) && isset($_POST["password"]))
    {
      if (preg_match("/[^A-Za-z0-9]/", $_POST["login"]))
      {
        header('Location: ?log=nonaut');
        exit();
      }

      if($_POST["submit"]=="connexion")
      {
        $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
        echo $hash."---".$_POST["login"] ;
        $sql = "SELECT pass FROM utilisateurs WHERE login='".$_POST["login"]."'";
        $result2 = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result2)>0)
        {
          $row2 = mysqli_fetch_assoc($result2);
          $hash = $row2["pass"];
          if (password_verify($_POST["password"], $hash))
          {
            $sql = "SELECT type FROM utilisateurs WHERE login='".$_POST["login"]."'";
            $result2 = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result2)>0)
            {
              $row2 = mysqli_fetch_assoc($result2);
              $_SESSION["login"] = $_POST["login"];
              $_SESSION["password"] = $hash;
              $_SESSION["type"] = $row2["type"];
              header('Location: ?');
              exit;
            }
            else
            {
              header('Location: ?log=nonex1');
              exit;
            }
            mysqli_close($conn);
          }
        }
        else
        {
          header('Location: ?log=nonex2');
          exit;
        }
        mysqli_close($conn);
      }
    }

    echo "
    <form action='#' method='post'>
      <div>
        <div>
          <p>Login <input type='text' name='login' required/></p>
        </div>
        <div>
          <p>Mot de passe <input type='password' name='password' required/></p>
        </div>
        <input type='submit' name='submit' value='connexion'/>
      </div>";

      if(isset($_GET["log"]))
      {
        if($_GET["log"]=="allex")
          echo "Erreur d'Enregistrement";
        if($_GET["log"]=="nonex")
          echo "Erreur de Connexion";
        if ($_GET["log"]=="nonaut") {
          echo "Erreur de Connexion";
        }
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

    header('Location: monespace.php');
    exit;

    echo "
    <div>
        <p> Bonjour ".$_SESSION["login"]."! </p>
    </div>
    ";

    echo "
      <form action='?reset=true' method='post'>
        <input type='submit' value='deconnexion'/>
      </form>";
  }
?>
