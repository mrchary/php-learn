<?php

  $coders = simplexml_load_file("names.xml");

  foreach ($coders as $coder) {
    echo $coder[0]->name.' is '.$coder[0]->age.'<br>';
  }

?>
