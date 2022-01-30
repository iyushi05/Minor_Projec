<?php
session_start();
$d_id=$_SESSION["d_id"];

include_once("dbCon.inc");
extract($_GET);
mysqli_query($conn, "delete from car_details where c_id='$c_id'");

$qry="insert into car_details values('$c_id', $c_engine, $c_ac, $c_starter, $c_radiator, $c_catalytic, ";
$qry=$qry."$c_wheels, $c_battery, $c_seat, $c_horn, $c_body, 1)";
mysqli_query($conn, $qry);
header("Location: details4.php?c_id=$c_id");
?>