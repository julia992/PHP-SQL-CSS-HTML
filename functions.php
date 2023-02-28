<?php
  //work with strings
  echo strrev(".dlrow olleH") . "<br>"; //Reverse strings
  echo str_repeat("Hip " , 2); //Repeat
  echo strtoupper("hooray!"); //Create hight letter
  $lowered = strtolower("anY NUmbs and letteR");
  echo $lowered;
  $ucfixed = ucfirst("any numbs and letter") . "<br>";
  echo $ucfixed;
?>

<?php
  echo fix_names("WILLIAM" , "henry" , "gatES");

  function fix_names($n1, $n2, $n3)
  {
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
    return $n1. " " . $n2. " " . $n3;
  }
  ?>
