<?php
  session_start();
  //This is my login uername and password
  $username = "panhara";
  $password = "12345";
  if(isset($_POST['submit'])){
    if(!empty($_POST['usernam1e'] && $_POST['password'])){
      if($_POST['username']==$username && $_POST['password']==$password){
        $_SESSION['currentUser'] = $username;
        header('location: welcom.php');
      }else{
        echo "your username or password is invailid";
      }
    }else{
      echo "Please input your name or password";
    }
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form class="" action="" method="post">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="submit" value="Submit">
      </form>
  </body>
</html>
