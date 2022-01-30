<?php
session_start();
$c_id=$_GET["c_id"];
$_SESSION["c_id"]=$c_id;
?>
<center>
<form method=post enctype='multipart/form-data' action=up2.php>
Choose your file : 
<input type=file name=fnm>
<p>
<input type=submit value='Upload'>
