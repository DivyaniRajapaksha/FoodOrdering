<?php 
ob_start();

require 'header.php';
require 'footer.php';
require 'configLo.php';
require ("session.php");
?>

<?php 
 $userID = $_SESSION['user_id'];
 //echo $userID;

if(!$conn)
{
    echo "Fail to connect MYSQL!".mysqli_connect_error();
}
else
{
$sql = "SELECT * FROM user WHERE Id='$userID'";
//echo $sql;


$result=mysqli_query($conn,$sql);
if($result->num_rows > 0 ) { ?>

    <?php while($row=$result->fetch_assoc())
     { ?>

     <!DOCTYPE html>
    <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
           
        </head>
    
        <style>
           .acc1{
               font-style:normal;
                font-size:1.5em;
           }
           .txt{
            width: 30%;
            height: 5%;
           }
           .btn2, input[type=submit]
             {
                width: 100%;
                background-color: #333;
                color: white;
                padding: 14px 5px;
                width:30%;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-style:normal;
                font-size:0.8em;
            }

           .btn2, input[type=submit]:hover 
            {
                background-color: orangered;
            }

        </style>
        <body><br><br><br><br><br>

     <fieldset>
        <form method="post" action="EditAccount.php?id='<?php echo $row["Id"]; ?>'">
        <h1 class="title" align="center">Edit My Account</h1>
        <div class="acc1" align="center" >
        <pre>
            <div class="lable">First Name:      <input class="txt" type="text" name="firstname" value="<?php echo $row['first_name'] ?>"<br><br></div>
            <div class="lable">Last Name:       <input class="txt" type="text" name="lastname" value="<?php echo $row['last_name'] ?>"<br><br></div>
            
            <div class="lable">Email:           <input class="txt" type="email" name="email" value="<?php echo $row['email'] ?>"<br><br></div>
            <div class="lable">Contact Number:  <input class="txt" type="text" name="contactNo" value="<?php echo $row['contact_no'] ?>"<br><br></div>
            <div class="lable">No:              <input class="txt" type="text" name="add1" value="<?php echo $row['add_1'] ?>"<br><br></div>
            <div class="lable">Street:          <input class="txt" type="text" name="add2" value="<?php echo $row['add_2'] ?>"<br><br></div>
            <div class="lable">City:            <input class="txt" type="text" name="city" value="<?php echo $row['city'] ?>"<br><br></div>
            <div class="lable">Post Code:       <input class="txt" type="text" name="postCode" value="<?php echo $row['post_code'] ?>"<br><br></div>
        </pre>
            
        <input class ="btn1" type="submit" name="submit" value="Update">
        <input  class ="btn1" type="submit" name="delete" value="Deactivate my Account"><br><br><br><br>
        <a href = "ChangePW.php"><button class="btn2" type="button">Change my Password</button></a>
        
        </div>
        </form>
        </fieldset>
        <?php 
    }
 } 
  else{
      echo "Error 1";
  }
 }  
?>

<?php if(isset($_POST["submit"]))
{
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
 
    $email = $_POST['email'];
    $contactNo = $_POST['contactNo'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $city = $_POST['city'];
    $postCode = $_POST['postCode'];
    //$type = $_POST['type'];

    $sql ="UPDATE `user` SET `first_name`='$fname',`last_name`='$lname',`email`='$email',`contact_no`='$contactNo',`add_1`='$add1',`add_2`='$add2',`city`='$city',`post_code`='$postCode' WHERE Id='$userID'";

    if(mysqli_query($conn,$sql))
    {
        echo "Successful!";
    }
    else{
        echo "Error 2";
    }
}
?>

<?php
$userID =$_SESSION['user_id'];

if(isset($_POST["delete"]))
{
    $sql = "DELETE FROM user WHERE Id ='$userID'";

    if(mysqli_query($conn,$sql))
    {
        //echo "deleted successfully";
        header("Location:logout.php");
    }
    else
    {
        echo "Error:".$conn->error;
    }
}
?>

<?php
mysqli_close($conn);
?>

<br><br><br>
</body>


