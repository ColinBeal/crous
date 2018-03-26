<?php
    $query = "select bourse, montant from statut where login = '".$_SESSION["login"]."'";
    $result = mysqli_query($conn,$query);

    if (mysqli_num_rows($result) > 0)
    {
      while($row = $result->fetch_assoc())
      {
        if ($row["bourse"] == "non")
        {
          $img = "img src='/images/croix.png'/>";
        }
        else
        {
          $img = "<img src='/images/ok.png'/>";
        }

        echo "
          <ul>
            <li>".$img."</li>
            <li>".$row["montant"]." euros</li>
          </ul>
        ";
      }
    }
?>
