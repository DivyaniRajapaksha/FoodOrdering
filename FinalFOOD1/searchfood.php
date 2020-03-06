<?php  

include 'header.php';
include 'footer.php';
require 'cart.php';
?>
<style>

.zoom {
	width:100%;
	padding: 10px;
}

.zoom {
	width:18%;
	float: left;
	margin-left: 1.5%;
	padding: 0,0,0,0;
	transition: 1s;
}

.zoom img{
	width: 100%;
	max-width: 100%;
	border-radius:5%;
}

.zoom img:hover
{
	transform: scale(0.9);
	transition: all 800ms;
}

.namefilm:hover
{
	transform: scale(0.9);
	transition: all 800ms;
}
body{background-image: url("images/wood.jpg");}
.namefilm{
	font-size: 1em;
	font-family:Prestige Elite Std;
	margin: 0 0 0 0 ;
	font-weight: bold;
	color: white ;
	text-align: center;

}
</style>
<body>
<br><br><br><br><br><br>


			<?php 
			$searchs = $_POST['searchfood'];
			$sql ="SELECT * from menu_items where `menu_name` LIKE '%$searchs%'";

			$result = mysqli_query($connect,$sql);
			$queryResult = mysqli_num_rows($result);

		// calculate how many results
			?>
			<h1 style = "position:absolute; top:410px; left:590px; color:white;"><?php echo "There are ".$queryResult." Results! ";?></h1>
			<?php
			if($queryResult > 0){
				while ($row = mysqli_fetch_assoc($result)){

					?>
					<div class="zoom">

						<img src="<?php echo $row['image'] ?>" style="width:100%; height:27%; margin:2px;">
						<h2 style = "position:; top:690px; left:60px; color:white;">Food Name:<?php echo $row['menu_name']; ?></h2>
						<h2 style = "position:; top:720px; left:60px; color:white;">Food No:<?php echo $row['menu_id']?></h2>
						<h2 style = "position:; top:750px; left:60px; color:white;">Regular Price: Rs.<?php echo $row['regular_Price'];?></h2> 
						<h2 style = "position:; top:780px; left:60px; color:white;">Large Price: Rs.<?php echo $row['large_Price'];?></h2> 

					</div>

					


					<?php

				}
			} 
			else { 

				?>
				<div id="no_result">
					<h1 style = "position:absolute; top:510px; left:50px; color:red;"><?php echo"There are no result matching your search! "; ?></h1>
				</div>
				<?php
			}
			?>

		</div>
