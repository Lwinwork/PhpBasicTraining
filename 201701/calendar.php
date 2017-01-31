<?php
required_once "/Applications/XAMPP/xamppfiles/lib/php/PEAR/Calendar-0.5.5/Calendar-0.5.5/Month/Weekdays.php";
//表形式用の日付object を生成する
$calMonth = new Calendar_Month_Weekdays(date('Y'),date('n'),0);

//日付object の一覧作成

$calMonth->build();
print("<h2>".date("Y年n月")."</h2>");
print("<table><thead><tr>");
print("<th>日</th><th>月</th><th>火</th><th>木</th><th>金</th><th>土</th>");
print("</tr></thead><tbody>");


//date object の呼び出し.....build nae 作成lote ke de object twe ko fetch method nae 出す..while loop ka fetch method ka false ma phit ma chin loop pat
//date object mar last month next month twe shi..current month hote ma hote ..isempty nae kwel char pay...current month ma hote yin...空 htar
while ($day = $calMonth->fetch()){
  if ($day->isFirst()){
    print("<tr>");
    }
  if($day->isempty)()){
    print("<td>&nbsp;</td>");

  }
  else{
print("<td align=¥"right¥">{$day->thisDay()}</td>");

  }
  if ($day->isLast()){
    print("</tr>");
  }
}
print("</tbody></table>");

 ?>
