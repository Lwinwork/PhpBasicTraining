<body>
ようこそ
<?php
$name = $_POST['name'];
print(htmlspecialchars($name, ENT_QUOTES, 'UTF-8'));
/*html special count_chars ma use bae,
ようこそ<?php print($_GET['name']);?>さん　so lel ok but not secure

ようこそ<?php print(htmlspecialchars($_POST['name'ENT_QUOTES,'UTF-8'],))
ENT_COMPAT=>default,can convert double code not singlecode
ENT_QUOTES=>single code,can also convert in double code
ENT_NOQUOTES=>single code cannot convert in double code*/
?>
さん
</body>
