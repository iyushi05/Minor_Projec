<?php
session_start();
$d_id=$_SESSION["d_id"];

include_once("dbCon.inc");
include_once("header.php");


$rs=mysqli_query($conn, "select * from car_oh where d_id='$d_id'");
?>
<center>
<p>&nbsp;
<p>&nbsp;
<table border=1 width=37% style='border-collapse:collapse'>
<tr>
<th bgcolor=#000055><font color=white>Details
<tr>
<td bgcolor=#aaaaaa>&nbsp;
<tr>
<td>
<table border=0 align=center width=82%>
<tr>
<td>&nbsp;
<?php
while($rw=mysqli_fetch_row($rs))
{
	$c_id=$rw[1];
	$nm=$rw[2]." ".$rw[3];
	echo "<tr><td>$nm";
	echo "<td><a href=details2.php?c_id=$c_id>Details</a>";
	echo "<td><a href=up1.php?c_id=$c_id>Photo Upload</a>";
}
?>
<tr>
<td>&nbsp;
</table>
</table>
<p>
<?php
include_once("footer.php");
?>