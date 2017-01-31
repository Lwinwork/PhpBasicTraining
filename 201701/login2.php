welcome
<?php
print($auth->username)
 ?>
 san<br />
 <form method="POST" action="<?php print(htmlspecialchars(
   $_SERVER['PHP_SELF']));?> ">
  <input type="submit" name="logout" value="logout" />
</form>
