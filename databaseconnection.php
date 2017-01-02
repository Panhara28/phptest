<?php
  include 'databaseuser.php';
  $dbconnection = mysqli_connect($dblocal,$dbusername,$dbpassword,$dbname) or die('Could not connect because '.mysqli_connect_error());
  $query = "SELECT * FROM pages WHERE id = 1";
  $result = mysqli_query($dbconnection,$query);
  $page = mysqli_fetch_assoc($result);

?>
