<?php
function subjectList(){
  $array = array(
    "Math",
    "CPP",
    "Fund",
    "Average",
    "Grade"
  );
  for ($i=0; $i <count($array) ; $i++) {
    echo "<th>$array[$i]</th>";
  }
}

  function Average($m,$cpp,$f){
    $m = $_POST['math'];
    $cpp = $_POST['cpp'];
    $f = $_POST['fund'];
    if (isset($_POST['submit'])){
      $result = ($m+$cpp+$f)/3;
      return $result;
    }
  }

  function Grade(){
    if (Average() > 90) {
      $grade = ' A';
    }elseif(Average() >= 90 || Average()>80){
      $grade = ' B';
    }elseif(Average()>=80 || Average()>70){
      $grade = ' C';
    }elseif(Average()>=70 || Average()>60){
      $grade = ' D';
    }elseif(Average()>=60 || Average()>=50){
      $grade = ' E';
    }else{
      $grade = 'F';
    }
    if (isset($_POST['submit'])) {
      return $grade;
    }else{
      echo ' ';
    }
  }

  function result(){
    $array = array(
      $_POST['math'],
      $_POST['cpp'],
      $_POST['fund'],
      Average(),
      Grade()
    );
    for ($i=0; $i <count($array) ; $i++) {
      if (empty($_POST['math']&&$_POST['fund']&&$_POST['cpp'])) {
        echo ' ';
      }else {
        echo "<th>$array[$i]</th>";
      }
    }
  }

  function Validate(){
    if (isset($_POST['submit'])) {
      if (empty($_POST['math'] && $_POST['fund'] && $_POST['cpp'])) {
        echo "All field *require";
      }else{
        Average();
      }
    }
  }
 ?>
