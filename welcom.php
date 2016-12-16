<?php
  session_start();
  $count = 0;
  if(isset($_SESSION['currentUser'])){
    echo "Welcom ".$_SESSION['currentUser'];
  }
  echo "<a href='login.php'>Logout</a>"
 ?>
