<?php 
require 'configLo.php';
?>
<?php
if(isset($_GET['id']))
{
    $submit_id=$_GET['id'];
    //echo $submit_id;
} 
?>


<?php 


  if(isset($_POST["submit1"]))
   {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $contactNo = $_POST['contactNo'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $city = $_POST['city'];
    $postCode = $_POST['postCode'];
    $type = $_POST['type'];

    
   $sql ="UPDATE `user` SET `Id`='$submit_id',`first_name`='$fname',`last_name`='$lname',`password`='$password',`email`='$email',`contact_no`='$contactNo',`add_1`='$add1',`add_2`='$add2',`city`='$city',`post_code`='$postCode',`type`='$type' WHERE `Id`='$submit_id'"; 
    //echo $sql;

    if(mysqli_query($conn,$sql) == true)
    {
        echo "Successful!";
        header("location:adminedit1.php");
    }
    else{
        echo "Error";
    }
}

?>


