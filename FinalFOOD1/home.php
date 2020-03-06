<?php
require 'configLo.php';
require ("session.php");
?>

<?php 
    echo "<h2>Your User ID: ".$userID."</h2>";
    echo "<h2>You are logged in as :" .$name."</h2>";

?>

<!-- <a href = "contact.php">Contact Us</a> 
<br>
<a href = "about.php">About Us</a>
<br> -->

<!-- <form action="account.php" id="home" method="post">
Customer ID: <input type="text" id="cusID" name="customerID">
<input type="submit" value="View My Account" align="left">
</form> -->
<a href = "account.php"><button type ="button">My Account</button></a>
<a href = "logout.php"><button type ="button">Logout</button></a>