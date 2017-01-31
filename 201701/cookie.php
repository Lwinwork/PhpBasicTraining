<?php
$times=$_COOKIE["count"];
if(!isset($times)){
  $times = 0;
}else{
  $times++;
}
setcookie("count",$times,time()+600);
?>
<html>
<head>
<title>cookie.php</title>
</head>
<body>
<?php
if($times == 0){
  print("morning");

}else if($times ==1){
  print("2times");
}else if($times == 2){
  print("come a lot of times");
}else{
  print("anything to ask?");
}
?>
</body>
</html>
