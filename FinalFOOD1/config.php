<?php
$server="localhost";
$user_name="root";
$password="";
$database="food_ordering_system";

$conn=new mysqli($server,$user_name,$password,$database);

if($conn->connect_error){
    die("connection Failed :".$conn->connect_error);

}
?>