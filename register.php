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
$uname0=$_GET['uname'];
$pwd0=$_GET['pwd'];
$sql="INSERT INTO ".$_SESSION['table_name']."(".$colnames[1].",".$colnames[2].") VALUES('$uname0','$pwd0')";
$result=mysql_query($sql);
if($result){
header("location:viewdb.php");
}
else{
$_SESSION['exists']=true;
header("location:insert.php");
}
?>