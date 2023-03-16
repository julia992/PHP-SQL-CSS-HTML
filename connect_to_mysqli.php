<?php
  //connect to mysqli
  require_once 'login.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($connect_error);
?>
