<?php
$server="localhost";
$user_name="root";
$password="";
$database="food_ordering_system";

$conn1 =new mysqli($server,$user_name,$password,$database);

if($conn1->connect_error){
	die("connection failed: ".$conn1->connect_error);
	}
?>
