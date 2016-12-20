<?php
    $array = array(
      3000=>array(
        "Salad"
      ),
      4000=>array(
        "Burger"
      ),
      2000=>array(
        "Bananas"
      ),
      1000=>array(
        "Fish"
      )
    );

    if (isset($_POST['submit'])) {
      if(empty($_POST['categories'])){
        echo "Please select one!";
      }else{
        foreach ($array as $element => $inner_array){
          foreach($inner_array as $items){
            if($_POST['categories']==$items){
              echo "Price ".$element * $_POST['number'];
            }
          }
        }
      }
    }
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
      <form class="" action="<?php SELF_PHP?>" method="post">
          <select class="" name="categories">
              <?php
                include 'partail.php';
              ?>
          </select>
          <input type="number" name="number" placeholder="Quantity" value=1>
          <input type="submit" name="submit" value="Submit">
      </form>
   </body>
 </html>
