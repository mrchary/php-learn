<?php

session_start();

if(isset($_POST['name']) && isset($_POST['password']) ) {
  $name = htmlentities($_POST['name']);
  $password = htmlentities($_POST['password']);
  if(empty($name) || empty($password)){

  } else {
    $_SESSION["USER"] = $name;
  }
}
header("Location: index.php");

?>
