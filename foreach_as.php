<?php
  // sequential enumeration of elements array
  $paper = array("Coopier", "Inkjet", "Laser", "Photo");
  $j = 0;

  foreach ($paper as $item)
  {
    echo "$j: $item<br>";
    ++$j;
  }
?>

<?php
  $paper = array('copier'=> "Copier & Multipurpose",
              'inkjet' => "Inkjet Printer",
              'laser' => "Laser Printer",
              'photo' =>  "Photographic Paper");

 foreach ($paper as $item => $description)
    echo "$item: $description<br>";
?>
