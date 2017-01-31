<?php
require_once '/Applications/Xampp/xamppfiles/lib/php/PEAR/HTML_AJAX-0.5.7/HTML_AJAX-0.5.7/AJAX/Server.php'
//do defination(定義する) class that is called from java script
class AjaxTest{
  function hello($name){
    return "morning $name";
  }
  }
  //instant 化　（form） of HTML_AJAX_Server class which is main class

  $server = new HTML_AJAX_Server();
  //定義 lote ke de class ye instant ko register 登録 pee handleRequest use pee java script nae sat
  $server->registerClass(new AjaxTest());
  $server->handleRequest();

  //if u dont need proxy----------
  //require_once '/Applications/Xampp/xamppfiles/lib/php/PEAR/HTML_AJAX-0.5.7/HTML_AJAX-0.5.7/AJAX/Server.php'
  //$server = new HTML_AJAX_Server();
  //$server->handleRequest();
 ?>
