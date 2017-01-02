<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // $count = strlen($description);
      // if ($count >=322) {
      //   $trancate = substr($description,0,200);
      // }else{
      //   echo "false";
      // }
      function trancate($description){
        $count = strlen($description);
        if ($count>=322) {
          $description = substr($description,0,200);
        }else {
          echo "False";
        }
        return $description;
      }

      $description = "Linux was originally developed for personal computers based on the Intel
      x86 architecture, but has since been ported to more platforms than any other operating system.
      [18] Because of the dominance of Android on smartphones
      , Linux has the largest installed base of all general-purpose operating systems.";

      echo trancate($description);
     ?>
  </body>
</html>
