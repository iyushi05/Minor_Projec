<?php
include_once("header.php");
?>
<center>
<p>&nbsp;
<p>&nbsp;
<form method=get action=d_reg2.php>
<table border=1 width=37% style='border-collapse:collapse'>
<tr>
<th bgcolor=#000055><font color=white>Dealer Registration Form
<tr>
<td bgcolor=#aaaaaa>&nbsp;
<tr>
<td>
<table border=0 align=center width=82%>
<tr>
<td>&nbsp;
<tr>
<td>Name : 
<td><input type=text name=d_name>
<tr>
<td>Address : 
<td><input type=text name=d_addr>
<tr>
<td>Contact : 
<td><input type=text name=d_contact>
<tr>
<td>Email : 
<td><input type=text name=d_email>
<tr>
<td>&nbsp;
<tr>
<td align=center colspan=2><input type=submit value=Register>
<tr>
<td>&nbsp;
</table>
</table>
<?php
include_once("footer.php");
?>