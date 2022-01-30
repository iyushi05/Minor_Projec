<?php
session_start();
$d_id=$_SESSION["d_id"];

include_once("dbCon.inc");
include_once("header.php");
$c_id=$_GET["c_id"];
$rs=mysqli_query($conn, "select * from car_details where c_id='$c_id'");
$rw=mysqli_fetch_array($rs);
?>
<center>
The individuals parts' condition of the car is registered
<p>
<?php
include_once("calc_func.inc");

$tot=0;
$c_engine_val=calc_engine($rw["c_engine"]);
$c_ac_val=calc_ac($rw["c_ac"]);
$c_starter_val=calc_starter($rw["c_starter"]);
$c_radiator_val=calc_radiator($rw["c_radiator"]);
$c_catalytic_val=calc_catalytic($rw["c_catalytic"]);
$c_wheels_val=calc_wheels($rw["c_wheels"]);
$c_battery_val=calc_battery($rw["c_battery"]);
$c_seat_val=calc_seat($rw["c_seat"]);
$c_horn_val=calc_horn($rw["c_horn"]);
$c_body_val=calc_body($rw["c_body"]);
$tot=$c_engine_val + $c_ac_val + $c_starter_val + $c_radiator_val + $c_catalytic_val;
$tot=$tot + $c_wheels_val + $c_battery_val + $c_seat_val + $c_horn_val + $c_body_val;
?>
<p>&nbsp;
Based on the evaluation of your car by our experts
<p>&nbsp;
<table border=1 width=37% style='border-collapse:collapse'>
<tr>
<th bgcolor=#000055><font color=white>Evaluation (in INR)
<tr>
<td bgcolor=#aaaaaa>&nbsp;
<tr>
<td>
<table border=0 align=center width=46%>
<tr>
<td>&nbsp;
<tr>
<td>Engine: 
<td align=right><?php echo $c_engine_val;?>
<tr>
<td>AC: 
<td align=right><?php echo $c_ac_val;?>
<tr>
<td>Starter: 
<td align=right><?php echo $c_starter_val;?>
<tr>
<td>Radiator: 
<td align=right><?php echo $c_radiator_val;?>
<tr>
<td>Catalytic: 
<td align=right><?php echo $c_catalytic_val;?>
<tr>
<td>Wheels: 
<td align=right><?php echo $c_wheels_val;?>
<tr>
<td>Battery: 
<td align=right><?php echo $c_battery_val;?>
<tr>
<td>seat: 
<td align=right><?php echo $c_seat_val;?>
<tr>
<td>Horn: 
<td align=right><?php echo $c_horn_val;?>
<tr>
<td>Body: 
<td align=right><?php echo $c_body_val;?>
<tr>
<th>Total: 
<th align=right><?php echo $tot;?>
<tr>
<td>&nbsp;
</table>
</table>
