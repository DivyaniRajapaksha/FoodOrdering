<?php
require 'configLo.php';
require 'session.php';
?>
<?php
$userID = $_SESSION['user_id'];
//echo $userID;
$CurPw=$_POST['Cpassword'];
//echo $CurPw;
$NewPw=$_POST['Npassword'];
//echo $NewPw;
$ConPw=$_POST['Conpassword'];
//echo $ConPw;
if(!$conn)
{
    echo "Fail to connect MYSQL!".mysqli_connect_error();
}
else
{
    $sql = "SELECT* FROM user WHERE Id='$userID'";
    echo $sql;
    $result =mysqli_query($conn,$sql);

    $row = $result->fetch_assoc();
    $password = $row['password'];
    echo $password;

    if($password == $CurPw)
    {
        if($NewPw == $ConPw)
        {
            $sql1 = "UPDATE `user` SET `password`='$ConPw' WHERE Id ='$userID'";
            echo $sql1;

            if(mysqli_query($conn,$sql1) == true){
                echo "Update Successful!";
                header("Location:EditAccount.php");
            }
        }
        else{
            echo "Error";
        }
    }
    else{
        echo "invalid current password";
    }
}
?>