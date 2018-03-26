<?php
    $query = "select nom, prenom, date, adresse, mail, type from utilisateurs where login = '".$_SESSION["login"]."'";
    $result = mysqli_query($conn,$query);

    if (mysqli_num_rows($result) > 0)
    {
      while($row = $result->fetch_assoc())
      {
        echo "
          <ul>
            <li>".$row["nom"]."</li>
            <li>".$row["prenom"]."</li>
            <li>".$row["date"]."</li>
            <li>".$row["adresse"]."</li>
            <li>".$row["mail"]."</li>
            <li>".$row["type"]."</li>
          </ul>
        ";
      }
    }
?>
