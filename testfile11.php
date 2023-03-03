<?php
  //work with files
  $fh = fopen("testfile.txt", 'w') or die("Create file error");

  $text = <<<_END
  String 1
  String 2
  String 3
  _END;
  fwrite($fh, $text) or die("Error record");
  fclose($fh);
  echo "File 'testfile.txt' record done" ."<br>";
?>

<?php
  //work with files
  $fh = fopen("testfile.txt", 'r') or die("Exist file error");

  $text = fread($fh, 3); //function fread read 3 first symbols
  fclose($fh);
  echo $text;
?>
