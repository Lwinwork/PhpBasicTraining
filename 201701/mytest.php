<?php
function inverse($x){
  if($x == 0){
    throw new Exception("sunny");
    }
      else{
        return 1/$x;
  }
}
 try {
   print(inverse(2)."<br />");//例外が発生しない
   print(inverse(0)."<br />");//例外が発生する
 }
 catch(Exception $e){
   print("例外:".($e->getMessage())."<br />");
 }
  ?>
