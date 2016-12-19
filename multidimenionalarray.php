<?php
  $array = array(
    "info"=>
      array(
      "Name"=>"Panhara",
      "Age"=>28
    ),
    "score"=>array(
      "Math"=>30,
      "Fund"=>25,
      "Cpp"=>20,
    )
  );
  foreach ($array as $element => $inner_array) {
    echo $element."<br>";
    foreach ($inner_array as $items) {
      echo $items."<br>";
    }
  }
 ?>
