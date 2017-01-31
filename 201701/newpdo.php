<body>
<?php
try{
  $pdo = new PDO("mysql:localhost; dbname=kisop","usr","passwd");
  $res = $pdo->query("SELECT * FROM book");
 print($res->columnCount());
 }catch(PDOException $e){
  print("cannot connect");
}
$pdo = null;

?>
</body>
