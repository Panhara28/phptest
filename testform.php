<?php
  function form_for($type,$name,$placeholder){
    $typeOfForm = array(
      "text","number","email","submit","color",
      "date","datetime","datetime-local","email","month",
      "range","search","tel","time","url","week"
    );
    for ($i=0; $i <count($typeOfForm) ; $i++) {
      if ($typeOfForm[$i] == $type) {
        echo "<input type='$typeOfForm[$i]' name='$name' placeholder='$placeholder'>"."<br><br>";
      }
    }
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <form class="" action="<?php PHP_SELF?>" method="get">
      <?php
          form_for("text","fullname","Fullname");
          form_for("number","age","Age");
          form_for("submit");
      ?>
    </form>
  </head>
  <body>

  </body>
</html>
