<?php 
require 'configLo.php';
?>

<?php
 $first_name_1 = $_POST["firstname"];
 //echo $first_name_1;
 $last_name_1 = $_POST["lastname"];
 $password_1 = $_POST["password"];
 $con_password_1 = $_POST["conpassword"];
 $email_1 = $_POST["email"];
 $contact_no_1 = $_POST["contactnumber"];
 $add_1_1 = $_POST["address1"];
 $add_2_1 = $_POST["address2"];
 $city_1 = $_POST["city"];
 $post_code_1 = $_POST["postcode"];
 $type_1 = $_POST["type"];

 $sql = "INSERT INTO `user`(`Id`, `first_name`, `last_name`, `password`, `con_password`, `email`, `contact_no`, `add_1`, `add_2`, `city`, `post_code`, `type`) VALUES ('NULL','$first_name_1','$last_name_1','$password_1','$con_password_1','$email_1','$contact_no_1','$add_1_1','$add_2_1','$city_1','$post_code_1','$type_1')";

 //echo $sql;

   if(mysqli_query($conn,$sql)==TRUE){
     echo "Inserted successfully";
     header("location:CusDetails.php");
   }
   else{
     echo "Error:". $conn->error;
   }
   mysqli_close($conn);
?>