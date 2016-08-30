<?php

  session_start();

  if(isset($_SESSION['USER']) && !empty($_SESSION['USER'])){
    echo "Welcome, ".$_SESSION['USER'];
    echo "<br>";
    require 'logout.inc.php';
  } else {
    require 'login.inc.php';
  }

?>
