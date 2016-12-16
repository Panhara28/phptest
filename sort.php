<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function a($array){
        $arrcount = count($array);
        if(rsort($array)){
          sort($array);
        }

        for ($i=0; $i <$arrcount; $i++) {
          echo $array[$i];
        }

      }
      $ar = [1,2,3,6,7,9];
      a($ar);
     ?>
     
  </body>
</html>
