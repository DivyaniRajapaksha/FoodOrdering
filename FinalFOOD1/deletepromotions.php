<?php  if(isset($_GET['id'])){
		$id=$_GET['id'];
		
		
    }?>
    <?php
     require 'config.php';
     ?>
<?php


    $sql="DELETE FROM `promotion` WHERE id='$id'";
     if(mysqli_query($conn,$sql)){
					echo"Deleted Successfully";
					header("Location:adminedit1.php");
				}
				else{
					echo"error deleting";
				}
		
	?>

		<?php 
			mysqli_close($conn);
	?>