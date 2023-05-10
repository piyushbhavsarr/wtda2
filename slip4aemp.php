<?php
session_start();
$eno=$_GET['eno'];
$enm=$_GET['ename'];
$eadd=$_GET['eadd'];
$_SESSION['eno']=$eno;
$_SESSION['ename']=$enm;
$_SESSION['eadd']=$eadd;
?>
<html>
<body>
<form action="slip4aemp1.php" method="POST">
<center><h2>Enter Earning of Employee :</h2>
<table>
<tr><td><b>Basic:</b></td>
  <td><input type="text" name="e1"></td></tr>
<tr><td><b>DA:</b></td>
  <td><input type="text" name="e2"></td></tr>
<tr><td><b>HRA:</b></td>
  <td><input type="text" name="e3"></td></tr>
</table>
<br><input type="submit" value="submit">
</center>
</form>
</body>
</html>
