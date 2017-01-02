<?php
  function trim_value(&$value){
    $value = trim($value);
  }
  $array = array(" Carrot", "Bacon", " Apple ");
  var_dump($array)."<br>";

  array_walk($array,'trim_value');
  var_dump($array);
 ?>
