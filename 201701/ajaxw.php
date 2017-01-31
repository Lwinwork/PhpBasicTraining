<?php
require_once '/Applications/Xampp/xamppfiles/lib/php/PEAR/HTML_AJAX-0.5.7/HTML_AJAX-0.5.7/AJAX/Server.php';
class RssWeather{

//XML を受信して加工する/process する
function printWeather($id){


  $obj=simplexml_load_file("http://weather.livedoor.com/forecast/webservice/rest/v1?city={$id}&day=tomorrow");
                          return <<< EOS
  <table border>
  <tr><td align="center">{$obj->title}</td><td align="center">highest temp
  </td></tr>
  <tr>
  <td align="center"><img src="{$obj->image->flower.png}"> {$obj->telop}</td>
  <td align="center">{$obj->temperature->max->celsius} C</td>
  </tr>
  </table>
  EOS;
}

}
$server = new HTML_AJAX_Server();
$server->registerClass(new RssWeather());
$server->handRequest();

 ?>
