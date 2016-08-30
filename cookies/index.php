<?php
  require 'cookie.inc.php';

  session_start();

  if(isset($_SESSION['USER']) && !empty($_SESSION['USER'])){
    echo "Welcome, ".$_SESSION['USER'];
    echo "<br>";
    require 'logout.inc.php';
  } else {
    require 'login.inc.php';
  }

  if(isset($_COOKIE['feature']) && !empty($_COOKIE['feature'])){
    echo "<br> Hey! Feature enabled";
  } else {
    echo "<br> Oh! Feature disabled";
  }

?>
