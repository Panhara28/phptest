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
            <option value="<?php echo $array["Healthy"][0]?>"><?php echo $array["Healthy"][0]?></option>
            <option value="<?php echo $array["Healthy"][1]?>"><?php echo $array["Healthy"][1]?></option>
            <option value="<?php echo $array["Healthy"][2]?>"><?php echo $array["Healthy"][2]?></option>
            <option value="<?php echo $array["Healthy"][3]?>"><?php echo $array["Healthy"][3]?></option>
            <option value="<?php echo $array["Unhealthy"][0]?>"><?php echo $array["Unhealthy"][0]?></option>
            <option value="<?php echo $array["Unhealthy"][1]?>"><?php echo $array["Unhealthy"][1]?></option>
            <option value="<?php echo $array["Unhealthy"][2]?>"><?php echo $array["Unhealthy"][2]?></option>
            <option value="<?php echo $array["Unhealthy"][3]?>"><?php echo $array["Unhealthy"][3]?></option>
        </select>
        <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
