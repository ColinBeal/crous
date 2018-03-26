<?php
    $query = "select * from utilisateur where statut <> 'admin'";
    $result = $link->$query;
    echo '<table class="table"><thead><tr><th>Etudiant</th><th>Date de naissance</th><th>Email</th></tr></thead><tbody>';

    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>".$row['prenom']." ".$row['nom']."</td><td>".$row['date de naissance']."</td><td>".$row['mail']."</td></tr>";
    }

    echo "</tbody></table>";
?>
