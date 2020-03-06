<?php
	$connect = mysqli_connect("localhost","root","","food_ordering_system");
?>

	<?php 
	$id=$_GET['id'];
	global $id;
	
    $sql="SELECT * FROM food_comment WHERE com_id= '$id'";
    $result=mysqli_query($connect,$sql);
	while($row =$result->fetch_assoc()){?>
    
				<div id="box">	
		        <form  enctype="multipart/form-data" id="form" method="POST" name="form" action="editcomment.php?id=<?php echo $row['com_id'];?>">
				
					<label>Name:<span>*</span><br>
					</label><input name="name" type="text" value="<?php echo $row['name'];?>" required><br><br>
			    
				<label>comment:<span>*</span><br></label>
			    
				<textarea row = "2" cols = "139" name = "comment" required><?php echo $row['comment'];?></textarea><br>
			    <br>
				<input type="reset" value="Reset" />
			    <input type="submit" value="Edit"  name="Edit"/>
			    </form></div>

		<?php } ?>
	
	

<?php
	
		if(isset($_POST["Edit"])){
			$name=$_POST['name'];
			$comment=$_POST['comment'];
		
			$sql="UPDATE food_comment SET com_id = '$id',name='$name',comment='$comment' WHERE com_id ='$id'";
			if(mysqli_query($connect,$sql)){
					echo"Updated Successfully";
				}
				else{
					echo"error uploading";
				}
		}
?>
<br>
<?php
    $sql="SELECT * FROM food_comment";
    $result=mysqli_query($connect,$sql);
	while($row =$result->fetch_assoc()){?>
    


				<textarea row = "2" cols = "139" name = "comment"><?php echo $row['comment'];?></textarea><br><br>	


		<?php } ?>