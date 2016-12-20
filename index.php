<?php
  include 'header.php';
  for ($i=0; $i <count($events) ; $i++) {
    echo "<a href='#'>$events[$i]</a>"."<br>";
  }
 ?>
