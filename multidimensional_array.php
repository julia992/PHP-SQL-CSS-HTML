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

<?php
//multidimensional array
  $products = array(
     'paper' =>   array(
        'copier'=> "Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' =>  "Photographic Paper"),

    'pens' => array(
      'ball' => "Ball Points",
      'hilite' => "Highlighters",
      'marker' => "Markers"),

    'misc' => array(
      'tape' => "Sticky Tape",
      'glue' => "Adhesives" ,
      'clips' => "Paperclips"
    )
);
    echo "<pre>";

    foreach ($products as $section => $items)
      foreach ($items as $key => $value)
        echo "$section:\t$key\t($value)<br>";
    echo"</pre>";
?>
