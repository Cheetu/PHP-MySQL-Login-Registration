<?php
session_start();
mysql_connect("localhost","root","") or die ("Can't Connect");
$mydatabase=$_SESSION['database_name'];
mysql_select_db($mydatabase) or die("Can't Connect to Database");
$sql="SELECT * FROM `".$_SESSION['table_name']."`";
$result=mysql_query($sql);
$colnames = array();
while($col=mysql_fetch_field($result)){
$colnames[] = $col->name;
}
$id1=$_GET[$colnames[0]];
$uname1=$_GET[$colnames[1]];
$pwd1=$_GET[$colnames[2]];
$sql="UPDATE  `".$_SESSION['table_name']."` SET  `".$colnames[1]."` =  '$uname1',`".$colnames[2]."` =  '$pwd1' WHERE  `".$colnames[0]."`='$id1'";
$result=mysql_query($sql);
header("location:update.php");
?>