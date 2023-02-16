<?php
$file = fopen("arjun.txt", "r");

  $line = fgets($file);
  echo $line. "<br>";

fclose($file);
?>
