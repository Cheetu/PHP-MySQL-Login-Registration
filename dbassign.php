<?php 
session_start();
$_SESSION['database_name']=$_GET['dbname'];
$_SESSION['table_name']=$_GET['tblname'];
 ?>