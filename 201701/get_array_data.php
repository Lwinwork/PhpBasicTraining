<body>
<table border="1">
<tr><td>name</td><td>sha</td><td>bansha</td></tr>
<?php
try{
$pdo = new PDO("mysql:host=localhost; dbname=kisop","usr","passwd");
$res= $pdo->query("SELECT * FROM book ORDER BY pbub LIMIT 3");
while($row = $res->fetch()){
  print("<tr>");
  print("<td>".$row["btitle"]."</td>");
  print("<td>".$row["bpub"]."</td>");
  print("</tr>¥n");
  }
}catch(PDOException $e){
  print($e->getMessage());

}
$pdo = null;
?>
</table>
</body>
