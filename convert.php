<?php // convert.php
  $f = $c = '';

 if (isset($_POST['f'])) $f = sanitizeString($_POST['f']);
 if (isset($_POST['c'])) $c = sanitizeString($_POST['c']);

 if ($f != '')
 {
  $c = intval((5 / 9) * ($f - 32));
  $out = "$f F equal $c C";
 }
 elseif($c != '')
 {
  $f = intval((9 /5) * $c +32);
  $out = "$c C equal $f F";
 }
 else $out = "";

 echo <<<_END
 <html>
  <head>
    <pre>
      Please enter temperature in Celsius or Fahrenheit and press the button
      Convert
    <b>$out</b>
    <form method="post" action="convert.php">

    Fahrenheit <input type="text" name="f" size="7">
       Celsius <input type="text" name="c" size="7">
               <input type="submit" value="Convert">
    </form>
   </pre>
 </body>
</html>
_END;

function sanitizeString($var)
{
 $var = stripslashes($var);
        $var = strip_tags($var);
 $var = htmlentities($var);
 return $var;
}
?>
