<?php
//mb_encode_mimeheader用encode SDO_DAS_Setting
mb_language("japanese");
mb_internal_encoding("UTF-8");
require_once 'Mail.php';
//back ending SDO_DAS_Setting
$params = array(
  'host'      => 'smtp.gmail.com',
  'port'      => 587,
  'auth'      => true,
  'username'  => 'lkhinemon@gmail.com',
  'password'  => 'forrelative',
  'debug'     => true,
);
//instant 化のmail class_alias
$smtp = Mail::factory('smtp',$params);
//mail header SDO_DAS_Setting
$headers = array(
  'From'   =>'lkhinemon@gmail.com',
  'To'     =>'lkhinemon@gmail.com',
  'Subject'=>mb_encode_mimeheader("hello")
);
//reveiver address setting
$recipients ='lkhinemon@gmail.com';
//mail body Setting
$body = mb_convert_encoding("mail inside","ISO-2022-JP");
//sending Mail
print("</pre>");
$e = $smtp->send($recipients, $headers, $body);
print("</pre>");

if(PEAR::isError($e) ){
  print($e->getMessage());

}
else{
  print("{$recipients}sent");
}
 ?>
