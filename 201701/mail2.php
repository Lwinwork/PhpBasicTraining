<?php
//mb_encode_mimeheader用encode SDO_DAS_Setting
mb_language("japanese");
mb_internal_encoding("UTF-8");
require_once 'Mail.php';
require_once 'Mail/mime.php;'

//Mail_Mime class ye instant 化
$mime = new Mail_Mime("¥n");

//Text body setting
$mime->setTxtBody("attach file is aldy attached");

//setting of attach file.
$mime->addAttachment("flower.jpg");

//message setting
$bodyParam = array(
  "head_charset" => "ISO-2022-JP",
  "text_encoding" => "ISO-2022-JP",
  "test_charset" => "UTF-8"

);

//build the Message
$body = $mime->get($bodyParam);

$addheaders = array(
  'From'   => 'lkhinemon@gmail.com',
   'To'   =>  'lkhinemon@gmail.com',
   'Subject' => mb_encode_mimeheader("mail with attachfile")
 );

 //build header
 $headers =$mime->headers($addHeaders);

//back ending SDO_DAS_Setting
$params = array(
  'host'      => 'smtp.gmail.com',
  'port'      => 587,
  'auth'      => true,
  'username'  => 'lkhinemon@gmail.com',
  'password'  => 'forrelative',

);

$recipients ='lkhinemon@gmail.com';
$smtp = Mail::factory('smtp',$params);


$e = $smtp->send($recipients, $headers, $body);


if(PEAR::isError($e) ){
  print($e->getMessage());

}
else{
  print("{$recipients}sent");
}
 ?>
