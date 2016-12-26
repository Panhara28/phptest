<?php
  srand(microtime()*1000000);
  $num = rand(1,3);
  switch ($num) {
    case 1: $image_file = "images/cloud.png";
      break;
    case 2: $image_file = "images/donut.png";
      break;
      case 3: $image_file = "images/iphone6.png";
    default: "No Image Found";
      break;
  }
  echo "Random Image: <img src=$image_file />"
 ?>
