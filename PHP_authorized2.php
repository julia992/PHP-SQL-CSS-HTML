<?php //PHP-authorized.php
 $username = 'admin';
 $password = '1990';

if (isset($_SERVER['PHP_AUTH_USER']) &&
     isset($_SERVER['PHP_AUTH_PW']))
 {
   if ($_SERVER['PHP_AUTH_USER'] == $username &&
   $_SERVER['PHP_AUTH_PW'] == $password)
   echo "Registration is successfully";
   else die("Wrong combination user - password");
  }
  else
  {
    header('WWW-Authenticate: Basic realm="Restricted Section"');
    header('HHTP/1.0 401 Unauthorized');
    die("Please enter name and password");
  }
?>
