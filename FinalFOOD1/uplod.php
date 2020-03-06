
<!DOCTYPE html>
<html>
	<style>
		#btn1,#btn2{
         position: absolute;
         top: 70%;
         left: 55%;
         transform: translate(-50%, -50%);
         -ms-transform: translate(-50%, -50%);
         background-color: #555;
         color: white;
         font-size: 14px;
         padding: 10px 18px;
         border: none;
         cursor: pointer;
         border-radius: 5px;
		 text-align: center;
		 text-decoration:none;
	 }

	 #btn2{
	position: absolute;
         top: 70%;
         left:49%;
	}	 
	
	</style>	
	<head>
	
	<link rel="stylesheet" type ="text/css" href="css/uploaddb.css"> 
	</head>

	<body style = "background:url(images/backu.jpg) no-repeat; background-size:100%">
	<h1 style="text-align:center;font-size:60px;color:rgb(66, 66, 66); background-color:#f7712480;">Taste Buds</h1>
	<div style =   "width: 300px;
					border: 5px ;
					padding: 65px;
					margin: 15px;
					background-color:rgba(36, 250, 161, 0.582);
					font-size: 20px;
					display: block;
					margin-left: auto;
					margin-right: auto;
					color:white;
					border-radius: 10px;"
					>

		<form  enctype="multipart/form-data" id="form" method="post" name="form">
		<p>
		<label style = "color: rgb(66, 66, 66);" >Name:<span>*</span></label><input style = "background-color:rgb(66, 66, 66); border-style: none; color:white; width:210px;border-radius: 5px;" name="name" type="text" placeholder="Product name" required><br><br>
		</p><p>
			<label style = "color: rgb(66, 66, 66);">Regular:<span>*</span></label>
			<input style = "background-color:rgb(66, 66, 66);border-style: none; color:white;  width:210px; border-radius: 5px;" name="regular" type="text" placeholder="Rs." required><br><br>
			</p>
			<p>
			<label style = "color: rgb(66, 66, 66);">Large:<span>*</span></label>
			<input style = "background-color:rgb(66, 66, 66);border-style: none; color:white; width:210px; border-radius: 5px;" name="large" type="text" placeholder="Rs." required><br><br>
			</p>
			<p>
			<label style = "color: rgb(66, 66, 66);">Type:<span>*</span></label>
			<input style = "background-color:rgb(66, 66, 66);border-style: none; color:white;  width:210px; width:210px; border-radius: 5px;" name="type" type="text" placeholder="Traditional" required><br><br>
			</p>
			
			<label style = "color: rgb(66, 66, 66);">Image:<span>*</span></label>
			<div id="upload1">
				<input style = "background-color:#4626035d;  width:210px;" id="file" name="file" type="file" required>
				</div>
			<br><br>
		   <input id = "btn1" type="reset" value="Reset" />
			<input id = "btn2" type="submit" value="upload"  name="upload"/>
			</form></div>
					
	</body>
</html>
<?php
if (isset($_POST['upload'])) {

if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 5000000)
) {

	if ($_FILES["file"]["error"] > 0) {
		echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
	}
	 else {

		echo "Your File Uploaded Succesfully!<br/>";
	 }
	if (file_exists("uploads/" . $_FILES["file"]["name"])) {
		echo $_FILES["file"]["name"] . " <b>already exists.</b> ";
	} else {
		move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"]);
			$imgFullpath = "http://".$_SERVER['SERVER_NAME'].':'.'80'.dirname($_SERVER["REQUEST_URI"].'?').'/'. "uploads/" . $_FILES["file"]["name"];
			echo "<b>Stored in:</b><a href = '$imgFullpath' target='_blank'> " .$imgFullpath.'<a>';

		}
	}
}

?>
	<?php
		require'configuaration.php';
	?>	
			
			<?php
				global $conn1;
				
	
				if(isset($_POST["upload"])){
				
				$name=$_POST["name"];
				$regular_price=$_POST["regular"];
				$large_price=$_POST["large"];
				$type=$_POST['type'];
				global $imgFullpath;
				
				
				$sql="INSERT INTO `menu_items` (`menu_id`, `menu_name`, `regular_Price`, `large_Price`, `type`, `image`) VALUES (NULL, '$name', '$regular_price', '$large_price', '$type', '$imgFullpath ')";
				

		
			 if($conn1->query($sql)){
				echo "Inserted successfully";
				header("Location:adminedit1.php");
			}
			else{
			echo "Error:". $conn1->error;
		
			}
		
		
	
		mysqli_close($conn1);
				}
		?>
			
			
			
	