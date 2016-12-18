<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $max = 10;
      if (isset($_POST['message'])) {
        if(str_word_count($_POST['message']) >= $max){
          echo "Maximium is $max";
        }else {
        }
      }
    ?>

     <form class="" action="<?php PHP_SELF?>" method="post">
       <textarea name="message" rows="8" cols="80"></textarea>
       <input type="submit" name="submit" value="Submit">
     </form>

  </body>
</html>
