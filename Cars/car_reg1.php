<?php
include_once("header.php");
?>
<center>
<p>&nbsp;
<p>&nbsp;
<form method=get action=car_reg2.php>
<table border=1 width=37% style='border-collapse:collapse'>
<tr>
<th bgcolor=#000055><font color=white>Car Registration
<tr>
<td bgcolor=#aaaaaa>&nbsp;
<tr>
<td>
<table border=0 align=center width=82%>
<tr>
<td>&nbsp;
<tr>
<td>Company : 
<td><input type=text name=c_co>
<tr>
<td>Model : 
<td><input type=text name=c_model>
<tr>
<td>Variant : 
<td><input type=radio name=c_variant value=p>Petrol
<input type=radio name=c_variant value=d>Diesel
<td><input type=radio name=c_variant value=e>Electric
<tr>
<td>Year : 
<td><input type=text name=c_yr>
<tr>
<td>&nbsp;
<tr>
<td align=center colspan=2><input type=submit value=Register>
<tr>
<td>&nbsp;
</table>
</table>