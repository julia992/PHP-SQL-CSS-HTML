<?php
  // Adding elements to an array and extracting them
  $paper[]= "Copier";
  $paper[] = "Inkjet";
  $paper[] = "Laser";
  $paper[] = "Photo";

  for ($j = 0 ; $j < 4 ; ++$j)
      echo "$j: $paper[$j]<br>";
?>

<?php
  // Adding elements to an associative array and extracting them
  $paper['copier']= "Copier & Multipurpose";
  $paper['inkjet'] = "Inkjet Printer";
  $paper['laser'] = "Laser Printer";
  $paper['photo'] = "Photographic Paper";

      echo $paper['laser'] . "<br>";
?>

<?php
  // Adding elements with word array and extracting them
  $p1 = array("Coopier", "Inkjet", "Laser", "Photo");

  echo "Element of array p1: " . $p1[2] . "<br>";

  $p2 = array('copier'=> "Copier & Multipurpose",
              'inkjet' => "Inkjet Printer",
              'laser' => "Laser Printer",
              'photo' =>  "Photographic Paper");

  echo "Element of array p2: " .$p2['inkjet'] . "<br>";
?>
