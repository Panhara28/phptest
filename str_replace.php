<?php

  $description = "motherfucker";
  $replace = array(
    "f***",
    "d***",
    "b***",
    "d***",
    "pu***",
    "d***head",
    "a**",
    "a**hole"
  );
  $search = array(
    "fuck",
    "damn",
    "motherfucker",
    "bitch",
    "dick",
    "pussy",
    "dickhead",
    "ass",
    "asshole"
  );
  $replaced = str_replace($search,$replace,$description);
  echo $replaced;
  ?>
