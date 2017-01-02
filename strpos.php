<?php
  $text = "Super Man";
  if (strpos($text,'M')) {
    for ($i=0; $i <strlen($text) ; $i++) {
      if ($i==6) {
        echo str_replace($text[$i],'Wom',$text);        
      }
    }
  }else{
    echo "No";
  }
 ?>
