<?php
    $query = "select * from utilisateurs where type = 'etudiant'";
    $result = mysqli_query($conn,$query);
    echo '<table class="table"><thead><tr><th>Etudiant</th><th>Date de naissance</th><th>Email</th></tr></thead><tbody>';

    if (mysqli_num_rows($result) > 0)
    {
      while($row = $result->fetch_assoc())
      {
        echo "<tr><td>".$row['prenom']." ".$row['nom']."</td><td>".$row['date de naissance']."</td><td>".$row['mail']."</td></tr>";
      }
    }
    echo "</tbody></table>";
?>
