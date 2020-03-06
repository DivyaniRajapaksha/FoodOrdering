<?php 
require 'configLo.php';
?>

<?php
if(isset($_GET['id']))
{
    $submit_id=$_GET['id'];
    echo $submit_id;
} 
?>

<?php




    $sql = "DELETE FROM user WHERE Id ='$submit_id'";

    if(mysqli_query($conn,$sql))
    {
        echo "deleted successfully";
        header("location:adminedit1.php");
    }
    else
    {
        echo "Error:".$conn->error;
    }

?>
<?php
mysqli_close($conn);
?>