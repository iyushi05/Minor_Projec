<?php
session_start();
$c_id=$_SESSION["c_id"];

include_once("dbCon.inc");
$dt=date('Y-m-d');

$fnm=$_FILES["fnm"]["name"];
move_uploaded_file($_FILES["fnm"]["tmp_name"], "c_photos/".$c_id);
echo "<center>Uploaded..";
echo "<p><img src='c_photos/$c_id' width=200 height=200>";
$qry="insert into car_photo values('$c_id', '$c_id', '$dt')";
mysqli_query($conn, $qry);
?>
