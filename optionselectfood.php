<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      //Dimentional Array
      $array = array(
        "Healthy"=>array(
          "Salad","Vegetables","Pasta","Apple"
        ),
        "Unhealthy"=>array(
          "Bread","Pizza","Harmbuger","Cheess"
        )
      );

      if (isset($_POST['submit'])) {
        if(empty($_POST['search'])){
          echo "Please select one!";
        }else{
          foreach ($array as $element => $inner_array) {
            foreach($inner_array as $items){
              if($_POST['search']==$items){
                echo "You are a ".$element." person.";
              }
            }
          }
        }
      }
     ?>

    <form class="" action="<?php PHP_SELF?>" method="post">
        <select class="" name="search">
            <?php
                for ($i=0;$i < count($array["Healthy"]);$i++){
                  echo '
                  <option value="'.$array["Healthy"][$i].'">'.$array["Healthy"][$i].'</option>
                  ';
                }
                for ($i=0;$i < count($array["Unhealthy"]);$i++){
                  echo '
                  <option value="'.$array["Unhealthy"][$i].'">'.$array["Unhealthy"][$i].'</option>
                  ';
                }
            ?>
        </select>
        <input type="submit" name="submit" value="Submit">
    </form>

  </body>
</html>
