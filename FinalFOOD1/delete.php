<?php  if(isset($_GET['id'])){
		$id=$_GET['id'];
		
		
    }?>
<?php
    require'configuaration.php'; ?>

<?php
		

			$sql="DELETE FROM `menu_items` WHERE menu_id='$id'";

			if(mysqli_query($conn1,$sql)){
					echo"Deleted Successfully";
					header("Location:adminedit1.php");
				}
				else{
					echo"error deleting";
				}
		
	?>

		<?php 
			mysqli_close($conn1);
	?>
