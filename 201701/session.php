<?php
session_start();
if(isset($_SESSION['last_update'])){
  if($_SESSION['last_update'] < time()-600){
    session_destroy();
    header('Location:http://localhost:81/xampp/session_timeout.html');
    exit;
  }else if($_SESSION['last_update']<time() - 60){
    session_regenerate_id(TRUE);
  }
}
?>
<html>
<head>
<title>session.php</title>
</head>
<body>
<?php
if($_POST['shouhin'] == "apple"){
  print("りんごを選択しました.<br />");
  $_SESSION['apple'] = $_SESSION['apple'] +1;
}else if($_POST['shouhin'] == "orange"){
  print("みかんを選択しました。<br />");
  $_SESSION['orange'] = $_SESSION['orange']+1;
}else{
  print("バナナを選択しました。<br />");
  $_SESSION['banana'] = $_SESSION['banana']+1;
}
print("<br />会計<br />");
print("りんご:". $_SESSION['apple']."<br />");
print("みかん:". $_SESSION['orange']."<br />");
print("バナナ:". $_SESSION['banana']."<br />");

print("session ID:" . session_id() . "<br />");
$_SESSION['last_update'] = time();

 ?>
<br />
追加で選択した場合は<a href="session.html">こちら</a><br />
</form>
</body>
</html>
