<?php
  function Navagation($navagation){
    $navagation = array("Home","About Us","Contact Me");
    for ($i=0; $i <count($navagation) ; $i++) {
      echo "<li><a>$navagation[$i]</a></li>";
    }
  }
 ?>
