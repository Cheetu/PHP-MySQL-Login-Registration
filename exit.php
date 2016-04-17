<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Error</title>
<link href="muz.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#02345F">
<div style="font-size: 20px; text-align: center; font-family:	Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;color: #FFF"; >Username or Password is Incorrect</br>Please enter correct Information"
</div>
<form action="submit.php" method="get" name="form1" id="form1"  onsubmit="MM_validateForm('uname','','R','pwd','','R');return document.MM_returnValue">
<table width="200" border="0" align="center" cellspacing="7" cellpadding="0">
    <tr>
      <td class="label">Username</td>
      <td><label for="uname"></label>
      <input type="text" name="uname" id="uname"/></td>
    </tr>
    <tr>
      <td class="label">Password</td>
      <td><label for="pwd"></label>
      <input type="password" name="pwd" id="pwd" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Login" /></td>
    </tr>
  </table>
</form>

</body>
</html>