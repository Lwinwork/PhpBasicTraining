<body>
<?php
$time = date("Y/m/d H:i:s");
print("現在時間 : $time");

$filepointer=fopen("/Applications/XAMPP/xamppfiles/htdocs/xampp/lwin.txt","a");
flock($filepointer,LOCK_EX);
fputs($filepointer,$time ." ". $_SERVER["REMOTE_ADDR"]."¥n");
flock($filepointer,LOCK_UN);
fclose($filepointer);
?>
</body>
