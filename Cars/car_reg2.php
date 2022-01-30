<?php
session_start();
$d_id=$_SESSION["d_id"];

include_once("dbCon.inc");

extract($_GET);

$rs=mysqli_query($conn, "select * from car_oh order by c_id desc");
$cd="";
if($rw=mysqli_fetch_row($rs))
{
	$cd1=$rw[0];
	$cd1=substr($cd1, 1);
	$n=$cd1;
	$n++;
	if($n>=0 && $n<10)
		$cd="C000".$n;
	else if($n>=10 && $n<100)
		$cd="C00".$n;
	else if($n>=100 && $n<1000)
		$cd="C0".$n;
	else if($n>=1000 && $n<10000)
		$cd="C".$n;
}
else
{
	$cd="D0001";
}
	$qry="insert into car_oh values('$d_id', '$cd', '$c_co', '$c_model', '$c_variant', $c_yr, 1)";
	mysqli_query($conn, $qry);
	echo "<center>Your car is now up for sale";
	echo "<p><a href=details1.php>Enter Description Of Car</a>";
?>