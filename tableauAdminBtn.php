<?php
    $query = "select * from utilisateurs where type = 'etudiant'";
    $qSuppr = "UPDATE statut SET bourse = 'non', montant = 0 WHERE login = '";
    $result = mysqli_query($conn,$query);

    echo '<table class="table"><thead><tr><th>Etudiant</th><th>Date de naissance</th><th>Email</th><th>Bourse</th></tr></thead><tbody>';

    if (isset($_GET["lgn"]))
    {
      $sql2 = $qSuppr.$_GET["lgn"]."'";
      mysqli_query($conn,$sql2);
      header('Location: ?');
      exit;
    }

    if (mysqli_num_rows($result) > 0)
    {
      while($row = $result->fetch_assoc())
      {
        echo '<tr><td>'.$row['prenom'].' '.$row['nom'].'</td><td>'.$row['date'].'</td><td>'.$row['mail'].'</td>';
        echo "<td><form action='?lgn=".$row["login"]."' method='post'><input type='submit' value='Supprimer Bourse'/></form></td></tr>";
      }
    }
    echo "</tbody></table>";
?>
