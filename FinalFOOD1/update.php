 <?php  if(isset($_GET['id'])){
		$id=$_GET['id'];
		
		
    }?>
<?php
    require'configuaration.php'; ?>

<?php
		if(isset($_POST["Edit"])){
			$name=$_POST['name'];
			$large=$_POST['large'];
			$regular=$_POST['regular'];

			$sql="UPDATE `menu_items` SET `menu_id`='$id',`menu_name`='$name',`regular_Price`='$regular',`large_Price`='$large' WHERE menu_id='$id'";
			
			if(mysqli_query($conn1,$sql)){
					echo"Updated Successfully";
					header("Location:adminedit1.php");
				}
				else{
					echo"error uploading";
				}
		}
	?>

		<?php 
			mysqli_close($conn1);
	?>
 