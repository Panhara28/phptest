<?php

  function has_space($string){
    if(preg_match('/ /',$string)){
      return true;
    }else{
      return false;
    }
  }
  //
  // if(isset($_POST['submit'])){
  //   if(has_space($_POST['input'])){
  //     echo "has at least one space"."<br>";
  //   }else{
  //     echo "has no space"."<br>";
  //   }
  // }


  function domainCheck(){
    if (preg_match('@^(?:http://)?([^/]+)@i',$_POST['url'], $matches)) {
      $host = $matches[1];
      echo $host;
    }
  }
  domainCheck();
  //
  // if (isset($_POST['submit'])) {
  //   if (domainCheck($_POST['url'])) {
  //     echo $_POST['url'];
  //   }
  // }
?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="<?php PHP_SELF?>" method="post">
        <input type="text" name="url" placeholder="Input">
        <input type="submit" name="submit" value="Submit">
     </form>
   </body>
 </html>
