<?php
include_once("dbCon.inc");
//$d_name=$_GET["d_name"];
//$d_addr=$_GET["d_addr"];
extract($_GET);

$cd="";
$rs=mysqli_query($conn, "select * from dealers order by d_id desc");
if($rw=mysqli_fetch_row($rs))
{
	$cd1=$rw[0];
	$cd1=substring($cd1, 1);
	$n=$cd1;
	$n++;
	if($n>=0 && $n<10)
		$cd="D000".$n;
	else if($n>=10 && $n<100)
		$cd="D00".$n;
	else if($n>=100 && $n<1000)
		$cd="D0".$n;
	else if($n>=1000 && $n<10000)
		$cd="D".$n;
}
else
{
	$cd="D0001";
}
$qry="insert into dealers values('$cd', '$d_name', '$d_addr', $d_contact', '$d_email', 1)";
//echo $qry;
mysqli_query($conn, $qry);
?>
<center>
Congrats..