<?php
  $form_name = "hello";
  $redirect_page = "http://google.co.in";
  if(isset($_POST['name']) && $_POST['name'] == "vineet" ){
    header("Location: ".$redirect_page);
  } else if(isset($_POST['name'])){
    $form_name = $_POST['name'];
    echo $form_name;
  }
  include 'form.inc.php';
 ?>
