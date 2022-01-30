<?php
session_start();
$d_id=$_SESSION["d_id"];
if(strcmp($d_id, "")==0)
{
	echo "Kripya login karke aaye !!";
}
else
{
	$nm=$_SESSION["d_name"];
	echo "<center>";
	echo "Welcome <b>$nm</b> ($d_id)";
	echo "<p><a href=car_reg1.php>New Car</a>";
	echo "<p><a href=logout.php>Sign out</a>";
}
?>