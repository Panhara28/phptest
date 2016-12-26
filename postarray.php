<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $array = array(
        "fullname"=>$_POST['fullname'],
        "phone"=>$_POST['phone']
      );
      foreach ($array as $element => $element_val) {
        if (isset($_POST['submit'])) {
          echo $element." ".$element_val."<br>";
        }
      }

     ?>

    <form class="" action="<?php SELF_PHP?>" method="post">
      <input type="text" name="fullname" placeholder="Fullname"><br><br>
      <input type="text" name="phone" placeholder="Phone"><br><br>
      <input type="submit" name="submit" value="Submit"><br>
    </form>

  </body>
</html>
