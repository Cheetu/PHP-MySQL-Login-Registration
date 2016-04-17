<?php
session_start();
$uname0=$_GET['uname'];
$pwd0=$_GET['pwd'];
mysql_connect("localhost","root","") or die ("Can't Connect");
mysql_select_db($_SESSION['database_name']) or die("Can't Connect to Database".$_SESSION['database_name']);
$sql="SELECT * FROM `".$_SESSION['table_name']."` where uname='$uname0'";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
if($result){
if($row['pwd']==$pwd0){
	header("location:main.php");
}
else
		header("location:exit.php");}
	else
		header("location:exit.php");
?>