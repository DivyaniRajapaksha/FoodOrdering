<?php 
require 'header.php';
require 'footer.php';
require 'configLo.php';
require ("session.php");
?>
<!DOCTYPE html>
<html>
    <form method="post" action ="ChangePWvalid.php">
        <pre>
        Current Password: <input type="password" name="Cpassword" required><br>
        New Password:     <input type="password" name="Npassword" required><br>
        Confirm Password: <input type="password" name="Conpassword" required><br>

        <input type="submit" name="submit" >
        </pre>
    </form>
</html>
