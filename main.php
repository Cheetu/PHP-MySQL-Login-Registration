<?php
session_start();
$_SESSION['exists']=false;
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome!</title>
<link href="mainStyle.css" rel="stylesheet" type="text/css">

<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/black-ops-one:n4:default;aclonica:n4:default;alex-brush:n4:default.js" type="text/javascript"></script>

</head>

<body>
<div id="wrapper">
<div class="headin" > Database Management
</div>
<div class="menu"><div id="menuHead" class="menuitem">Menu</div>
<a href="viewdb.php"><div class="menuitem">View Database</div></a>
<a href="insert.php"><div class="menuitem">Add New User</div></a>
<a href="delete.php"><div class="menuitem">Delete a User</div></a>
<a href="update.php"><div class="menuitem">Update Information</div></a>
<a href="index.php"><div class="menuitem" id="lgt">Logout</div></a>
</div>
</div>

</body>
</html>