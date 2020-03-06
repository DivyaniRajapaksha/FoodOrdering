<?php
require 'configLo.php';

SESSION_START();

$userID = $_SESSION['user_id'];
$query = mysqli_query($conn,"SELECT first_name,type FROM user WHERE Id ='$userID'");
$row = $query->fetch_assoc();
$name = $row['first_name'];
$type = $row['type'];

// if($userID == "" || $userID == NULL)
// {
    // header("Location:login.php");
// }

?>
