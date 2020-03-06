<!DOCTYPE html>
<html>
	<head>
		<style>
	body{background:url(images/backu.jpg) no-repeat; background-size:100%;}	
ul{
	list-style-type: none;
    margin: 0;
    padding:10px;
    width: 25%;
    background-color:rgba(36, 250, 161, 0.582);
    position: stiky;
    height: 100%;
    overflow: auto;
	 font-size: 25px;}
li a{
    display: block;
    padding:18px 16px;
    text-decoration: none;
    color: white;
	 font-size: 25px;
	
	}

li a:hover{
    background-color: #555;
	color: white;}
	

#search{
 position: absolute;
 top: 20%;
 left: 40%;
 width:500px;
 padding:10px 1px;
 height:16px;
 margin:1px;
 color:white;
 border: 5px solid #555;
 font-size: 17px;
 background-color:#555;
}

#btn1,#btn2{
         position: absolute;
         top: 23%;
         left: 86%;
         transform: translate(-50%, -50%);
         -ms-transform: translate(-50%, -50%);
         background-color: #555;
         color: white;
         font-size: 16px;
         padding: 12px 25px;
         border: none;
         cursor: pointer;
         border-radius: 5px;
		 text-align: center;
		 text-decoration:none;
	 }
#btn2{
	position: absolute;
         top: 23%;
         left:78%;

}	 

.table th,td{
            border: 2px solid white;
			border-collapse: collapse;
			color:white;
			font-size:21px;
}
.table{position:absolute;
top:30%;
left:40%;
background-color:rgba(68, 0, 0, 0.603);
}
</style>         
		 
	
	</head>



 

	
	<body>
	<h1 style="text-align:center;font-size:60px;color:rgb(66, 66, 66); background-color:#f7712480;margin-top:43px;">Taste Buds</h1>

<div>
<ul>
<li><a class="active1" href="">Edit Menu</a></li>
<li><a href="">Promotion Managment</a></li>
<li><a href="">Feedback Managment</a></li>
<li><a href="">User Mangment</a></li>
</ul></div>

		<div>
		<form action="search.php" method="POST">
		<input Id="search" type="text" placeholder="    Search..." name="search">
		</form>
		<a id="btn1"   href ="uplod.php">Add New</a>
		
		<a id="btn2" href="search.php">Search</a>
		</div>
		<?php
			require'configuaration.php';
			?>
			<?php
			global $conn1;
			$search=$_POST['search'];
			
			$sql="SELECT * FROM `menu_items` WHERE `menu_name` LIKE '$search' ORDER BY `image` DESC";
		
			$result= mysqli_query($conn1,$sql);
		?>
		
		
		<div class = "table">
			<table>
			
				<th>Product Id</th>
				<th>Product Name</th>
				<th>Regular</th>				
				<th>Large</th>
				<th>Product Image</th>
				<th>Edit</th>
				<th>Delete</th>
				
			<?php
				while($row =$result->fetch_assoc()){
				?>
				<tr>
					
					<td><?php echo $row['menu_id']?></td>
					<td><?php echo $row['menu_name']?></td>
					<td><?php echo $row['regular_Price']?></td>
					<td><?php echo $row['large_Price']?></td>
					<td><div><img src="<?php echo $row['image']?>" alt="Italian Trulli" height="100px" width="150px"></div></td>
					<td><a href="uploadmenu.php?id=<?php echo $row['menu_id'];?>">edit</a>
					</td>
					<td><a href="delete.php?id=<?php echo $row['menu_id'];?>">delete</a>
					</td>
				</tr>
				<?php
					}
					mysqli_close($conn1);
					?>
	
	
	
			</table>
		</div>

	</body>



</html>

</html>