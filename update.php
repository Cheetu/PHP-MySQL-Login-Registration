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
<div class="title">Edit Username / Password and click Update</div>
<?php
mysql_connect("localhost","root","") or die ("Can't Connect");
$mydatabase=$_SESSION['database_name'];
mysql_select_db($mydatabase) or die("Can't Connect to Database");
$sql="SELECT * FROM `".$_SESSION['table_name']."`";
$result=mysql_query($sql);
$rows=mysql_num_rows($result);
$row;
$cols=mysql_num_fields($result);
echo("<table><tr style=\"border:none;\"><th>ID</th><th>Usernames</th><th>Passwords</th><th></th></tr>");

while($row=mysql_fetch_array($result)){
echo("<tr><form action=\"updateSubmit.php\" method=\"get\" name=\"form1\" class=\"form\">");
    for($j=0;$j<$cols;$j=$j+1){
      $col=mysql_fetch_field($result, $j);
echo("<td ");if($j==0)echo("style=\"width: 10%;\"");echo("><input ");if($j==0)echo("readonly ");echo("type=\"text\" name=\"".$col->name."\" value=\"".$row[$j]."\">");
echo("</td>");
  }echo("<td><button class=\"updbtn\" type=\"submit\" name=\"action\" value=".$row[0].">Update</button></td></form></tr>");
  }
echo("</table>");
?>
<a href="main.php"><div class="menuitem" style="width:10%; margin-left:45%">Back</div></a>
</div>
</body>
</html>