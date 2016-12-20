<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
        $categories = array(
            "T-shirt"=>array(
              "t001","t002","t003"
            ),
            "Pant"=>array(
              "p001","p002","p003"
            )
        );


        if (isset($_POST['submit'])) {
          if (empty($_POST['category'])) {
              echo "Please select one!";
          }else{
            foreach ($categories as $product => $product_array) {
              foreach ($product_array as $items) {
                if ($_POST['category']==$items) {
                  echo $items;
                }
              }
            }
          }
        }
      ?>

       <form class="" action="<?php PHP_SELF?>" method="post">
         <select class="" name="category">
            <option value="<?php echo $categories["T-shirt"][0]?>"><?php echo $categories["T-shirt"][0];?></option>
            <option value="<?php echo $categories["T-shirt"][1]?>"><?php echo $categories["T-shirt"][1];?></option>
            <option value="<?php echo $categories["T-shirt"][2]?>"><?php echo $categories["T-shirt"][2];?></option>
         </select>
         <input type="submit" name="submit" value="Calculate">
       </form>
  </body>
</html>
