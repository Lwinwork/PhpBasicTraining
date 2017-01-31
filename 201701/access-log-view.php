<body>
<?php
$filepointer=fopen("/Applications/XAMPP/xamppfiles/htdocs/xampp/lwin.txt","r");
flock($filepointer,LOCK_SH);
while(!feof($filepointer)){
  $line = fgets($filepointer);
  print($line . "<br />");

}
flock($filepointer,LOCK_UN);
fclose($filepointer);
?>
</body>
