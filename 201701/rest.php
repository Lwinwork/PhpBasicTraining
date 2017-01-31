<body>
Today weather of Tokyo<br/>
<table border>
<tr><td align="center">weather</td><td align="center">highest temperature</td><td align="center">lowest temperature</td></tr>
<tr>

<?php
$xmlobj = simplexml_load_file('http://weather.livedoor.com/forecast/webservice/rest/v1?city=63&day=today');
print("<td><img src="flower.png" . $xmlobj->image->url . "¥">" . $xmlobj->telop . "</td>");
print("<td align=¥"right¥">" . $xmlobj->temperature->max->celsius . "</td>");
print("<td align=¥"right¥">" . $xmlobj->temperature->min->celsius . "</td>");
 ?>
 </tr>
 </table>
 </body>
