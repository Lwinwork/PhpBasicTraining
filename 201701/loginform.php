<form method="POST" action="<?php print(htmlspecialchars(
  $_SERVER['PHP_SELF']));?> ">
    <table border="0">
      <tr>
        <th align="right">loginID:</th>
        <td><input type ="text" name="username" /></td>
      </tr>
      <tr>
        <th align="right">password:</th>
        <td><input type ="password" name="password" /></td>
      </tr>
      <tr>
        <td><input type ="submit" name="login" value="login" /></td>
      </tr>
      <tr>

    </table>
  </from>
