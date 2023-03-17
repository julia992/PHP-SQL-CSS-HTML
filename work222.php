<?php
  //connect to mysqli
  $db_host='localhost';
  $db_name='gotham';
  $db_user='root';
  $db_pass='';
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
  $mysqli->set_charset("utf8mb4");

  $result = $mysqli->query("SELECT * FROM cats");
  while($row = $result->fetch_assoc())
  {
    echo '<p> id='.$row['id'].'. Name: '.$row['name'].'</p>';
  }
  ?>
