<?php

if(isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['description'])){
  $name = htmlentities($_GET['name']);
  $surname = htmlentities($_GET['surname']);
  $description = htmlentities($_GET['description']);
  if(empty($name) || empty($surname) || empty($description)){
    echo "Please fill in the form";
  } else {
    echo "Hello ".$name." ".$surname."<br>";
    echo $description;
  }
}

?>

<form action="index.php" method="get">
  <label for="name">name</label>
  <input type="text" name="name" value=""><br>
  <label for="surname">surnme</label>
  <input type="text" name="surname" value=""><br>
  <label for="description">description</label>
  <textarea name="description" value=""></textarea>
  <input type="submit" name="submit" value="submit">
</form>
