
<?php
require_once "/Applications/XAMPP/xamppfiles/lib/php/Auth/Auth.php";
//show login form
function loginFunction($username=null,$status=null,&$auth=null)
{
  //check authentication status
  switch($status){
    case AUTH_WRONG_LOGIN;
         print("login ID or password is wrong");
    break;
  }
  print("<br />{$status}");
  //read form
  require_once("loginform.php");
}
  $options = array(
    'dsn'=> "mysqli://usr:passwd@localhost/kisop", //dsn
    'table'=>"usrinfo"

  );
  //第３引数で自動login form を表示する関数を指定する
  $auth = new Auth("MDB2",$options,"loginFunction");

  //start authentiacation proc_get_status
  $auth->start();//show login screen(auth default screen)

  //check did u 移動 log out buttom or not
  if($_POST["logout"] && $auth->checkAuth()){
    $auth->logout();
    header("Location:".$_SERVER['PHP_SELF']);
  }

  //authentiacation check
  if($auth->getAuth()){
    require_once("login2.php");
  }

?>
