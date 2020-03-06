<?php

require 'configLo.php';

if(!isset($_SESSION)) 
    { 
        session_start(); 
        $email = $_POST['email'];
$password=$_POST['password'];


?>

<?php


//echo $email;
//echo $password;
if(!$conn)
{
    echo "Fail to connect to MYSQL!".mysqli_connect_error();
    
}
else
{
    $sql = "SELECT* FROM user WHERE email='$email' AND password='$password'";
   
    //echo $sql;
    $result = mysqli_query($conn,$sql);
}
//$row = mysqli_fetch_array($result);
$row = $result->fetch_assoc();
$userID=$row['Id'];

//if(isset($_POST['submit']))
//{


    if(($email == $row['email']) && ($password == $row['password'])) 
    {   
        $_SESSION['user_id'] = $userID;

        // ---------------------------

        $_SESSION['userName']=$row['first_name'];
        $_SESSION['type']=$row['type'];




        // ------------------------
        // echo "Correct Username and Password";
        if($row['type'] == "Customer")
        {
         
          
             header("Location:slideShowP1.php");
			 //echo  $_SESSION['userName'];
        }
        if($row['type'] == "Admin")
        {
        
         header("Location:adminedit1.php");
        }
        if($row['type'] == "Manager")
        {
            header();
        }
        if($row['type'] == "Chef")
        {
            header();
        }
        if($row['type'] == "Delivery person")
        {
            header();
        }
    }
    else
    {
        echo "Invalid Username and Password";
         header("Location:slideShowP1.php");
    }

}

   
mysqli_close($conn);
//}
?>