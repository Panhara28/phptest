<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      if (isset($_POST['submit'])) {
        if ($_POST['fullname']) {
          if (preg_match("/[A-za-z'-]/",$_POST['fullname'])){
            die("Invalid Name should be alpha");
          }
        }
        echo "Welcome ". $_POST['fullname'];
        exit();
      }

     ?>
     <form class="" action="<?php PHP_SELF?>" method="post">
        <input type="text" name="fullname" placeholder="Fullname">
        <input type="submit" name="submit" value="Submit">
     </form>
  </body>
</html>
