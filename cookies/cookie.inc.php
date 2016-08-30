<?php if(isset($_COOKIE['feature']) && !empty($_COOKIE['feature'])) : ?>
  <form class="" action="unset-cookie.php" method="post">
    <button type="submit" name="button">Disable feature</button>
  </form>
<?php else : ?>
 <form class="" action="set-cookie.php" method="post">
   <button type="submit" name="button">Enable feature</button>
 </form>
<?php endif ?>
