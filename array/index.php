<?php
  // $months = array('january','feb','mar','april');
  $months = ['january','feb','mar','april'];
  $month_tasks = [
    "january" => "Standing sex",
    "february" => "lay down and fuck sex",
    "march" => "oral sex",
    "april" => "anal sex"
  ];
  $sex_pos = [
    "teenage" => "wrap while standing",
    "young girl" => "Girl on top",
    "newly married" => "doggy style on bed",
    "new mother" => "on table",
    "mature aunty" => "missionary",
    "maid servant" => "doggy style standing"
  ];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My web</title>
  </head>
  <body>
    <h1>Months are</h1>
    <ul>
      <?php foreach ($months as $month) {
        echo "<li>$month</li>";
      }
       ?>
    </ul>
    <h1>What do you do in months?</h1>
    <ul>
      <?php
        foreach ($month_tasks as $month => $task) {
          echo "<li>$month : $task</li>";
        }
       ?>
    </ul>
    <h1>How do you fuck different women</h1>
    <ul>
      <?php foreach ($sex_pos as $type => $pos) : ?>
        <li>
          I fuck a <?= $type ?> as <?= $pos ?>
        </li>
      <?php endforeach ?>
    </ul>
  </body>
</html>
