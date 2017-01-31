
<?php
require_once "/Applications/XAMPP/xamppfiles/lib/php/Auth/Auth.php";
//show login form
function loginFunction($usernamel,$status,&$authl)
{
  //check authentication status
  switch($status){
    case AUTH_WRONG_LOGIN;
         print("login ID or password is wrong");
    break;
  }
  //read form
  require_once("loginform.php");
}
  $options = array(
    'dsn'=> "mysqli://usr:passwd@localhost/kisop", //dsn
    'table'=>"usrinfo"

  );
  //第３引数で自動login form を表示する関数を指定する
  $auth = new Auth("MDB2",$options,"loginFunction");

  //start authentiacation process
  $auth->start();//show login screen(auth default screen)

  //authentiacation check
  if($auth->getAuth()){
    require_once("loginform.php");
  }


?>
