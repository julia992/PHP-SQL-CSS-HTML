<?php
  //Executing a system command
$cmd = "dir"; //Windows

exec(escapeshellcmd($cmd), $output, $status);

if($status) echo "Command exe is not done";
else
{
  echo "<pre>";
  foreach($output as $line) echo htmlspecialchars("$line\n");
 echo "</pre>";
}
?>
