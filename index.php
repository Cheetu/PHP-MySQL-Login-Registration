<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>
<link href="mainStyle.css" rel="stylesheet" type="text/css" />
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/black-ops-one:n4:default;aclonica:n4:default;alex-brush:n4:default.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } } else if (test.charAt(0) == 'U') errors += '- Username is required.\n';else if (test.charAt(0) == 'P') errors += '- Password is required.\n';else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert(errors);
    document.MM_returnValue = (errors == '');
} }
</script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
</head>

<body>
<div id="wrapper">
<div class="headin"> Database Management
</div>
<div class="title">Login Account</div>
<form action="submit.php" method="get" name="form1" class="form" id="form1" onsubmit="MM_validateForm('uname','','U','pwd','','P');return document.MM_returnValue">
&nbsp;
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
    <input class="submitBTN" type="submit" name="submit" id="submit" value="Login" />
</form>
<div id="dbinfo"><form id="dbform" onsubmit="MM_validateForm('dbname','','R','tblname','','R');return document.MM_returnValue"><table id="modaltbl">
<tr><td class="label">Database Name</td><td><input type="text" name="dbname" id="dbname"/></td></tr>
    <tr><td class="label">Table Name</td><td><input type="text" name="tblname" id="tblname"/></td></tr>
    </table>
    <input id="modalbtn" class="submitBTN" type="submit" name="submit" id="submit" value="Go" />
    </form> 
    </div>
</div>
<div id="modalBG"></div>
<script src="dbinfo.js" type="text/javascript"></script>  
</body>
</html>