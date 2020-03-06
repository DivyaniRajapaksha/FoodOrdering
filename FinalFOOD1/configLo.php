<?php
$server="localhost";
$user_name="root";
$password="";
$databse="food_ordering_system";

$conn=new mysqli($server,$user_name,$password,$databse);

if($conn->connect_error){
    die("Connection failed :" .$conn->connect_error);
}

?>