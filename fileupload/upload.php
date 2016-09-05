<?php

  $file_name = $_FILES['file']['name'];
  $file_size = $_FILES['file']['size'];
  $file_type = $_FILES['file']['type'];
  $tmp_name = $_FILES['file']['tmp_name'];

  if(isset($file_name) && !empty($file_name)){
    $location = "uploads/";

    if(move_uploaded_file($tmp_name, $location.$file_name)){
      echo "File: <b>$file_name</b> is uploaded successfully<br><br>";
      echo "See your file: <a href='$location$file_name'>$file_name</a>";
    }else {
      echo "Couldn't upload file to server";
    }
  }else {
    echo "Couldn't process request";
  }

  echo "<br><br><a href='/sandbox/fileupload/'>Upload more</a>";
?>
