<?php
session_start();
$d_id=$_SESSION["d_id"];

include_once("dbCon.inc");
include_once("header.php");
$c_id=$_GET["c_id"];
//$rs=mysqli_query($conn, "select * from car_oh where d_id='$d_id'");
?>
<center>
<p>&nbsp;
<p>&nbsp;
<form method=get action=details3.php>
<table border=1 width=64% style='border-collapse:collapse'>
<tr>
<th bgcolor=#000055><font color=white>Car Details
<tr>
<td bgcolor=#aaaaaa>&nbsp;
<tr>
<td>
<table border=0 align=center width=82%>
<tr>
<td>&nbsp;
<tr>
<td>Engine Condition : 
<td><input type=radio name=c_engine value=5>Excellent
<td><input type=radio name=c_engine value=4>Good
<td><input type=radio name=c_engine value=3>Average
<td><input type=radio name=c_engine value=2>Poor
<td><input type=radio name=c_engine value=1>Not Usable
<tr>
<td>AC Condition : 
<td><input type=radio name=c_ac value=5>Excellent
<td><input type=radio name=c_ac value=4>Good
<td><input type=radio name=c_ac value=3>Average
<td><input type=radio name=c_ac value=2>Poor
<td><input type=radio name=c_ac value=1>Not Usable
<tr>
<td>Starter Condition : 
<td><input type=radio name=c_starter value=5>Excellent
<td><input type=radio name=c_starter value=4>Good
<td><input type=radio name=c_starter value=3>Average
<td><input type=radio name=c_starter value=2>Poor
<td><input type=radio name=c_starter value=1>Not Usable
<tr>
<td>Radiator Condition : 
<td><input type=radio name=c_radiator value=5>Excellent
<td><input type=radio name=c_radiator value=4>Good
<td><input type=radio name=c_radiator value=3>Average
<td><input type=radio name=c_radiator value=2>Poor
<td><input type=radio name=c_radiator value=1>Not Usable
<tr>
<td>Catalytic Condition : 
<td><input type=radio name=c_catalytic value=5>Excellent
<td><input type=radio name=c_catalytic value=4>Good
<td><input type=radio name=c_catalytic value=3>Average
<td><input type=radio name=c_catalytic value=2>Poor
<td><input type=radio name=c_catalytic value=1>Not Usable
<tr>
<td>Wheels Condition : 
<td><input type=radio name=c_wheels value=5>Excellent
<td><input type=radio name=c_wheels value=4>Good
<td><input type=radio name=c_wheels value=3>Average
<td><input type=radio name=c_wheels value=2>Poor
<td><input type=radio name=c_wheels value=1>Not Usable
<tr>
<td>Battery Condition : 
<td><input type=radio name=c_battery value=5>Excellent
<td><input type=radio name=c_battery value=4>Good
<td><input type=radio name=c_battery value=3>Average
<td><input type=radio name=c_battery value=2>Poor
<td><input type=radio name=c_battery value=1>Not Usable
<tr>
<td>Seat Condition : 
<td><input type=radio name=c_seat value=5>Excellent
<td><input type=radio name=c_seat value=4>Good
<td><input type=radio name=c_seat value=3>Average
<td><input type=radio name=c_seat value=2>Poor
<td><input type=radio name=c_seat value=1>Not Usable
<tr>
<td>Horn Condition : 
<td><input type=radio name=c_horn value=5>Excellent
<td><input type=radio name=c_horn value=4>Good
<td><input type=radio name=c_horn value=3>Average
<td><input type=radio name=c_horn value=2>Poor
<td><input type=radio name=c_horn value=1>Not Usable
<tr>
<td>Body Condition : 
<td><input type=radio name=c_body value=5>Excellent
<td><input type=radio name=c_body value=4>Good
<td><input type=radio name=c_body value=3>Average
<td><input type=radio name=c_body value=2>Poor
<td><input type=radio name=c_body value=1>Not Usable
<tr>
<td>&nbsp;
<tr>
<td align=center colspan=2><input type=submit value=Register>
<input type=hidden name=c_id value='<?php echo $c_id; ?>'>
<tr>
<td>&nbsp;
</table>
</table>
