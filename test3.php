<link rel="stylesheet" href="css/foundation.css">
<?php
    $array = array(
      3000=>array("Salad","Limon","Cabbage"),
      4000=>array("Burger","Pizza","Hotdog"),
      2000=>array("Bananas","Coconut","Apple"),
      1000=>array("Fish","Salmon","Shirmp"),
    );
    if (isset($_POST['submit'])) {
      if(empty($_POST['categories'])){
        echo "Please select one!";
      }else{
        foreach ($array as $element => $inner_array){
          foreach($inner_array as $items){
            if($_POST['categories']==$items){
              echo "
              <div class='row'>
                <div class='large-2 columns'>
                  <table >
                      <tr>
                        <th>Price</th>
                      </tr>
                      <tr>
                        <td style='text-align:center;'>".$element * $_POST['number']."</td>
                      </tr>
                  </table>
                </div>
              </div>
              ";
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
     <div class="row">
        <div class="large-2 columns">
          <form class="" action="<?php SELF_PHP?>" method="post">
              <select class="" name="categories">
                  <?php
                    include 'partial.php';
                  ?>
              </select>
              <input type="number" name="number" placeholder="Quantity" value=1>
              <input class="button" type="submit" name="submit" value="Submit">
          </form>
        </div>
     </div>
   </body>
 </html>
