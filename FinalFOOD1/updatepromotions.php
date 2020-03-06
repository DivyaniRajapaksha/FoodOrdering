<?php  if(isset($_GET['id'])){
		$id=$_GET['id'];
		echo $id;
		
    }?>
<?php
     require 'config.php';
     ?>

<?php
		if(isset($_POST["submit"])){
			$name=$_POST['name'];
			$current=$_POST['currentprice'];
			$last=$_POST['lastprice'];

			$sql="UPDATE `promotion` SET `name`='$name',`current_price`='$current',`last_price`='$last' WHERE `id`='$id'";
			
			if(mysqli_query($conn,$sql)){
					echo"Updated Successfully";
					header("Location:adminedit1.php");
				}
				else{
					echo"error uploading";
				}
		}
	?>

		<?php 
			mysqli_close($conn);
	?>
 