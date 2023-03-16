<?php
  //connect to mysqli
  require_once 'login.php';
  $conn = new mysqli($cmd, $un, $pw, $db);
  if ($conn->connect_error) die($connect_error);

  $query = "CREATE TABLE cats (
    id SMALLINT NOT NULL AUTO_INCREMENT,
    family VARCHAR(32) NOT NULL,
    name VARCHAR(32) NOT NULL,
    age TINYINT NOT NULL,
    PRIMARY KEY (id)
  )";

  $result = $conn->query($query);
  if (!$result) die ("Error connect to basedata: " . $conn->error);
?>
