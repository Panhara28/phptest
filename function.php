<?php
function subjectList(){
  $array = array(
    "Data Communication",
    "Computer Achitecture",
    "Database",
    "English",
    "Cplusplus",
    "Data Structure",
    "Average",
    "Grade"
  );
  for ($i=0; $i <count($array) ; $i++) {
    echo "<th>$array[$i]</th>";
  }
}

  function Average($dc,$ca,$db,$eng,$cpp,$ds){
    $dc = $_POST['DC'];
    $ca = $_POST['CA'];
    $db = $_POST['DB'];
    $eng = $_POST['ENG'];
    $cpp = $_POST['CPP'];
    $ds = $_POST['DS'];
    if (isset($_POST['submit'])){
      $result = ($dc+$ca+$db+$eng+$cpp+$ds)/6;
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

  function Result(){
    $array = array(
      $_POST['DC'],
      $_POST['CA'],
      $_POST['DB'],
      $_POST['ENG'],
      $_POST['CPP'],
      $_POST['DS'],
      Average(),
      Grade()
    );
    for ($i=0; $i <count($array); $i++) {
      if (empty($_POST['DC']&&$_POST['CA']&&$_POST['DB']&&$_POST['ENG']&&$_POST['CPP']&&$_POST['DS'])) {
        echo ' ';
      }else {
        echo "<th>$array[$i]</th>";
      }
    }
  }

  function Validate($error){
    if (isset($_POST['submit'])) {
      if (empty($_POST['DC']&&$_POST['CA']&&$_POST['DB']&&$_POST['ENG']&&$_POST['CPP']&&$_POST['DS'])) {
        $error = "<p style='text-align:center;color:red;'>All field *require<p>";
      }else{
        Average();
      }
    }
    return $error;
  }
 ?>
