<?php
if(isset($_GET["reset"]))
{
  session_unset();
  session_destroy();
	header('Location: index.php');
  exit;
}
?>
