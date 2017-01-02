<?php include 'testform.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $search = array(
        "fuck",
        "bitch"
      );

      $replace = array(
        "f***",
        "bi***"
      );

      if (isset($_POST['submit'])) {
        if (empty($_POST['message'])) {
          echo "Please field it";
        }else{
          if (str_replace($search,$replace,$_POST['message'])) {
            echo str_replace($search,$replace,$_POST['message']);
          }
        }
      }
     ?>

     <form class="" action="<?php PHP_SELF?>" method="post">
        <textarea name="message" rows="8" cols="80"></textarea>
        <input type="submit" name="submit" value="Submit">
     </form>
  </body>
</html>
