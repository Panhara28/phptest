<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $username = "panhara";
      $password = "12345";
      if (isset($_POST['submit'])) {
        if (empty($_POST['username'] && $_POST['password'])) {
          echo "Please input your username or password";
        }else {
          if($_POST['username']!= $username && $_POST['password']!=$password){
            die("This is die");
            echo "has been died";
          }else {
            echo "<a href='https://facebook.com'>facebook</a>";
          }
        }
      }
     ?>

     <form class="" action="<?php PHP_SELF?>" method="post">
       <input type="text" name="username" placeholder="Username">
       <input type="password" name="password" placeholder="Password">
       <input type="submit" name="submit" value="Submit">
     </form>
  </body>
</html>
