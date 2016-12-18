
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $array = array(
        "Panhara"=>25,
        "Bopha"=>26,
        "Rithro"=>50,
        "Dane"=>12
      );
      if(asort($array)){
        ksort($array);
      }else{
        echo ksort($array);
      }
      foreach ($array as $key => $value) {
        echo $key." $value"."<br>";
      }
     ?>

  </body>
</html>
