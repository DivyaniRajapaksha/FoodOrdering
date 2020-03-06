<?php  if(isset($_GET['id'])){
		$id=$_GET['id'];
		
		
    }?>
<?php
	$connect = mysqli_connect("localhost","root","","food_ordering_system");
	if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
    } 
?>

<?php
			$sql="DELETE FROM food_comment WHERE com_id='$id'";

			if(mysqli_query($connect,$sql)){
					echo"Deleted Successfully";
					//header("Location:indian.php");
					
				}
				else{
					echo"error deleting";
				}
		
?>

	<?php 
			mysqli_close($connect);
	?>