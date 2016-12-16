<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
        if (isset($_POST['submit'])) {
          if(empty($_POST['Fullname'] && $_POST['gender'])){
            echo "Both field require";
          }else{
            echo "Your name is ".$_POST['Fullname']." and your gender is ".$_POST['gender'];
            echo $_SERVER['PHP_SELF'];
          }
        }
       ?>

       <form class="" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
         <input type="text" name="Fullname" placeholder="Fullname"><br>
         <input type="radio" name="gender" value="male"> Male
         <input type="radio" name="gender" value="female"> Female <br>
         <input type="submit" name="submit" value="Submit">
       </form>
  </body>
</html>
