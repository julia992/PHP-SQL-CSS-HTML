<?php //PHP-authorized.php
if (isset($_SERVER['PHP_AUTH_USER']) &&
     isset($_SERVER['PHP_AUTH_PW']))
 {
   echo "Welcome user: " . $_SERVER['PH_AUTH_USER'] .
        " , password: " . $_SERVER['PHP_AUTH_PW'];
  }
  else
  {
    header('WWW-Authenticate: Basic realm="Restricted Section"');
    header('HHTP/1.0 401 Unauthorized');
    die("Please enter name and password");
  }
?>
