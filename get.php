<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(isset($_GET['submit'])){
        if(empty($_GET['fullname'] && $_GET['gender'])){
          echo "Both field require";
        }else{
          echo "Your name is ".$_GET['fullname']." and your gender is ".$_GET['gender'];
        }
      }else{
        echo "*require";
      }
     ?>

     <form class="" action="<?php PHP_SELF?>" method="get">
       <input type="text" name="fullname" placeholder="Fullname"><br>
       <input type="radio" name="gender" value="male"> Male
       <input type="radio" name="gender" value="female"> Female <br>
       <input type="submit" name="submit" value="Submit">
     </form>
  </body>
</html>
