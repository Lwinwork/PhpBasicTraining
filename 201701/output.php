<body>
<?php
$updir = "/Applications/XAMPP/xamppfiles/htdocs/xampp";
$filename = $_FILES['upfile']['lwintest.txt'];
if(substr(PHP_OS,0,3) == 'WIN'){
  $encoding = 'SJIS';

}else{
  $encoding = 'UTF8';

}
  if(move_uploaded_file($_FILES['upfile']['tmp_name'],
  　　$updir.mb_convert_encoding($filename,$encoding,"auto")) == FALSE){
    print("cannot upload");
    print($_FILES['upfile']['error']);

  }else{
    print("<b>".$filename."</b> uploaded");
  }

?>
</body>
