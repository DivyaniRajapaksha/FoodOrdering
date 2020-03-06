<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" type ="text/css" href="css/uploaddb.css"> 
<style> body{background-image: url("images/backa.jpg");}</style>
		</head>
<body>

	<h1 id="topic">Taste Buds</h1><hr>

   
  <?php  if(isset($_GET['id'])){
		$id=$_GET['id'];
		
    }?>
<?php
    require'configuaration.php'; ?>

	<?php
	global $id;
	
    $sql="SELECT * FROM `menu_items` WHERE menu_id=$id";
    $result=mysqli_query($conn1,$sql);
	
	if($result->num_rows>0)
	{
	?>

        <?php while($row =$result->fetch_assoc()){?>
           		 <div id="box">	
		        <form  enctype="multipart/form-data" id="form" method="POST" name="form" action="update.php?id=<?php echo $row['menu_id'];?>">
		        <p>
		        <label>Name:<span>*</span></label><input name="name" type="text" value="<?php echo $row['menu_name'];?>" required><br><br>
				</p><p>
			    <label>Regular:<span>*</span></label>
			    <input name="regular" type="text" value="<?php echo $row['regular_Price'];?>" required><br><br>
			    </p>
			    <p>
			    <label>Large:<span>*</span></label>
			    <input name="large" type="text" value="<?php echo $row['large_Price'];?>" required><br><br>
			    </p>
			
			        <label>Image:<span>*</span></label>
			    <div id="upload1">
				<input id="file" name="file" type="file" >
				</div>
			    <br><br>
		     <input type="reset" value="Reset" />
			    <input type="submit" value="Edit"  name="Edit"/>
			    </form></div>

		<?php }
	}
	else {
		echo"error";
		}?>


<?php
		/*if(isset($_POST["Edit"])){
			$name=$_POST['name'];
			$large=$_POST['large'];
			$regular=$_POST['regular'];
			
			echo $id;
			$sql="UPDATE 'menu_items'SET 'menu_name'='$name','regular_Price'='$regular','large_Price'='$large' WHERE menu_id=$id";

			if(mysqli_query($conn1,$sql)){
					echo"Updated Successfully";
				}
				else{
					echo"error uploading";
				}
}*/?>

		<?php 
			mysqli_close($conn1);
	?>

			
		
	
    </body>
    </html>