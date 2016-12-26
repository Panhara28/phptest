<?php
  $array = array(
    $_SERVER['PHP_SELF'],
    $_SERVER['GATEWAY_INTERFACE'],
    $_SERVER['SERVER_ADDR'],
    $_SERVER['SERVER_NAME'],
    $_SERVER['SERVER_SOFTWARE'],
    $_SERVER['SERVER_PROTOCOL'],
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['REQUEST_TIME'],
    $_SERVER['QUERY_STRING'],
    $_SERVER['HTTP_ACCEPT'],
    $_SERVER['HTTP_ACCEPT_CHARSET'],
    $_SERVER['HTTP_HOST'],
    $_SERVER['HTTP_REFERER'],
    $_SERVER['HTTPS'],
    $_SERVER['REMOTE_ADDR'],
    $_SERVER['REMOTE_HOST'],
    $_SERVER['REMOTE_PORT'],
    $_SERVER['SCRIPT_FILENAME'],
    $_SERVER['SERVER_ADMIN'],
    $_SERVER['SERVER_PORT'],
    $_SERVER['SERVER_SIGNATURE'],
    $_SERVER['PATH_TRANSLATED'],
    $_SERVER['SCRIPT_NAME'],
    $_SERVER['SCRIPT_URI']
  );

  for ($i=0; $i <count($array) ; $i++) {
    echo $i." $array[$i]"."<br>";
  }

 ?>
