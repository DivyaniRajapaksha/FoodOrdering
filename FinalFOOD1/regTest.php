
<?php
require 'configLo.php';
?>

<?php 

// if(isset($_POST["sumbit"]))
// {
        $first_name = $_POST["firstname1"];
        $last_name = $_POST["lastname"];
        $password = $_POST["password"];
        $con_password = $_POST["conpassword"];
        $email = $_POST["email"];
        $contact_no = $_POST["contactnumber"];
        $add_1 = $_POST["address1"];
        $add_2 = $_POST["address2"];
        $city = $_POST["city"];
        $post_code = $_POST["postcode"];
        //$type = $_POST["type"];

        $sql = "INSERT INTO `user`(`Id`, `first_name`, `last_name`, `password`, `con_password`, `email`, `contact_no`, `add_1`, `add_2`, `city`, `post_code`, `type`) VALUES ('NULL','$first_name','$last_name','$password','$con_password','$email','$contact_no','$add_1','$add_2','$city','$post_code','Customer')";

        //echo $sql;

          if(mysqli_query($conn,$sql)==TRUE){
            echo "Inserted successfully";
            header("location:slideShowP1.php");
          }
          else{
            echo "Error:". $conn->error;
          }
          mysqli_close($conn);
// }
        //}       
  
?>


