<?php
  function form_for($type,$name,$value,$placeholder){
    $typeOfForm = array(
      "text","number","email","submit","color",
      "date","datetime","datetime-local","email","month",
      "range","search","tel","time","url","week","textarea"
    );
    for ($i=0; $i <count($typeOfForm) ; $i++) {
      if ($typeOfForm[$i] == $type) {
        echo "<input type='$typeOfForm[$i]' name='$name' value='$value' placeholder='$placeholder'>"."<br><br>";
      }
    }
  }
 ?>
