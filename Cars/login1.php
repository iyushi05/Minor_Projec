<?php
include_once("header.php");
?>
<center>
<p>&nbsp;
<p>&nbsp;
<?php
$a="";
if(IsSet($_GET["abc"]))
	$a=$_GET["abc"];
if(strcmp($a, "")!=0)
{
	if(strcmp($a, "inv")==0)
	{
		echo "<font color=red>Invalid Login Info !!</font>";
	}
	if(strcmp($a, "bahar")==0)
	{
		echo "<font color=blue>Thank you</font>";
	}
}
?>
<form method=get action=login2.php>
<table border=1 width=37% style='border-collapse:collapse'>
<tr>
<th bgcolor=#000055><font color=white>User Login
<tr>
<td bgcolor=#aaaaaa>&nbsp;
<tr>
<td>
<table border=0 align=center width=82%>
<tr>
<td>&nbsp;
<tr>
<td>Mobile No : 
<td><input type=text name=d_contact>
<!--<tr>
<td>Password : 
<td><input type=password name=pass>-->
<tr>
<td>&nbsp;
<tr>
<td align=center colspan=2><input type=submit value=Login>
<tr>
<td>&nbsp;
</table>
</table>