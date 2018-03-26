<?php

    $query = "select * from utilisateurs where type = 'etudiant'";
    $result = mysqli_query($conn,$query);
    echo '<table class="table"><thead><tr><th>Etudiant</th><th>Date de naissance</th><th>Email</th></tr></thead><tbody>';

    while($row = mysqli_fetch_assoc($result))
    {
      
        echo "<tr><td>".$row['prenom']." ".$row['nom']."</td><td>".$row['date de naissance']."</td><td>".$row['mail']."</td></tr>";
    }

    echo "</tbody></table>";
?>
