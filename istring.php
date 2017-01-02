<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if (isset($_POST['submit'])) {
        if (empty($_POST['phone'])) {
          echo "Please input phone";
        } else {
          if (!preg_match("/[A-za-z'-]/",$_POST['phone'])) {
              echo $_POST['phone'];
            }else{
            echo "please input number";
          }
        }

      }
     ?>

     <form class="" action="<?php PHP_SELF?>" method="post">
       <input type="text" name="phone" placeholder="Phone"><br><br>
       <input type="submit" name="submit" value="Submit">
     </form>
  </body>
</html>
