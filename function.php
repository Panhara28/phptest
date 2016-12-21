<link rel="stylesheet" href="css/foundation.css">
  <?php
    include 'partialize.php';
    if (isset($_POST['submit'])) {
      if (empty($_POST['DC']&&$_POST['CA']&&$_POST['DB']&&$_POST['ENG']&&$_POST['CPP']&&$_POST['DS'])) {
        echo '<a style="color:red;" href="form.php">some field are empty click here to field again!</a>';
      }else{
        Average();
        Grade();
      }
    }
  ?>
