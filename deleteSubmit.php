<?php
session_start();
$id1=$_GET['action'];
mysql_connect("localhost","root","") or die ("Can't Connect");
$mydatabase=$_SESSION['database_name'];
mysql_select_db($mydatabase) or die("Can't Connect to Database");
$sql="DELETE FROM `".$_SESSION['table_name']."` WHERE  `id`='$id1'";
$result1=mysql_query($sql);
header("location:delete.php");
?>