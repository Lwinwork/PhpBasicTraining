<?php
//reading auth class
require_once "/Applications/XAMPP/xamppfiles/lib/php/Auth/Auth.php";
//database conncetion option Setting
$options = array(
  'dsn'=>"mysqli://usr:passwd@localhost/kisop",//dsn
  'table'=>"usrinfo"
);
//Auth instant 作成
$auth = new Auth("MDB2",$options);

//start authentiacation process
$auth->start();//show login screen(auth default screen)

//authentiacation check
if($auth->getAuth()){
  require_once("login.php");
}

 ?>
