<?php
session_start();

include_once("dbCon.inc");
//$d_id=$_GET["d_id"];
$d_contact=$_GET["d_contact"];
//$pass=$_GET["pass"];
$rs=mysqli_query($conn, "select * from dealers where d_contact='$d_contact'");// and pass='$pass' ");
if($rw=mysqli_fetch_row($rs))
{
	$_SESSION["d_id"]=$rw[0];
	$_SESSION["d_name"]=$rw[1];
	header("Location: login3.php");
}
else
{
	header("Location: login1.php?abc=inv");
				//Query String
}
?>