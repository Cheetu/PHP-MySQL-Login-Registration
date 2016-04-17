<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Database</title>
<link href="mainStyle.css" rel="stylesheet" type="text/css">

<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/black-ops-one:n4:default;aclonica:n4:default;alex-brush:n4:default.js" type="text/javascript"></script>

</head>

<body>
<div id="wrapper">
<div class="headin" > Database Management
</div>
<div class="title">Register New User :</div>
<div id="note"><?php 
$check=$_SESSION['exists'];
if($check==true){
	echo("Username already Exists");} ?></div>
<form action="register.php" method="get" name="form1" class="form" id="form1" onsubmit="MM_validateForm('uname','','R','pwd','','R');return document.MM_returnValue">
<table width="200" border="0" align="center" cellspacing="7" cellpadding="0">
    <tr>
      <td class="label">Username</td>
      <td colspan="2"><label for="uname"></label>
      <input type="text" name="uname" id="uname"/></td>
    </tr>
    <tr>
      <td class="label">Password</td>
      <td colspan="2"><label for="pwd"></label>
      <input type="password" name="pwd" id="pwd" /></td>
    </tr>
  </table>
   <input class="submitBTN" type="submit" name="submit" id="submit" value="Register" /><a href="main.php"><div class="submitBTN" >Back</div></a>
</form>
</div>
</body>
</html>