<?php
//require 'cart.php';
require 'header.php';
require 'footer.php';
?>       
<html>
</head>	
	<style>
body{background:url(images/backd.jpg) no-repeat; }	
ul{
	list-style-type: none;
    margin: 8px;
    padding:10px;
    width: 25%;
    background-color:gray;
    position: stiky;
    height: 62%;
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
    background-color: orange;
	color: white;}
	

#search{
 position: absolute;
 top: 57.5%;
 left: 55%;
 width:400px;
 padding:10px 1px;
 height:43px;
 margin:1px;
 color:white;
 border: 5px solid #555;
 font-size: 17px;
 background-color:#555;
}

    .foot{
    text-align:center;
    padding:20px;
    background:url("images/thai.jpg")no-repeat;
    opacity: 0.8;
    background-size: 100%;
    color:black;
    position:absolute;
    top: 1600px;
    width:95.5%;
    margin: 5px;
    }


#btn1,#btn2{
         position: absolute;
         top: 60.5%;
         left: 92%;
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
         top: 60.5%;
         left:85%;

}	 

.table th,td{
            border: 2px solid white;
			border-collapse: collapse;
			color:white;
			font-size:21px;
}
.table{position:absolute;
top:70%;
left:40%;
}

//-----------------------
.foot{
    text-align:center;
    padding:20px;
    background:url("images/thai.jpg")no-repeat;
    opacity: 0.8;
    background-size: 100%;
    color:black;
    position:absolute;
    top: 1300px;
    width:95.5%;
    margin: 5px;
    }
    .modal {
		display: none; 
		position: fixed; 
		z-index: 1; 
		padding: 70px; 
		left: 0;
		top: 0;
		width: 90%; 
		padding-left:100px;
		height: 90%; 
		overflow:auto; 
		background-color: rgb(0,0,0);
		background-color: rgba(0,0,0,0.1);	
		}

		.modal-content {
		background-color: #CACACA;
		margin: auto;
		padding: 20px;
		border: none;
		width:40%;
        height: 100%;		
		}
		.close {
		color: #aaaaaa;
		float: right;
		font-size: 50px;
		font-weight: bold;
		}

		.close:hover,.close:focus {
		color: black;
		text-decoration: none;
		cursor: pointer;
		}

		.IN001{
			position: absolute;
			top:77%;
			left:42%;
		 }
		.IN001 input{margin:2px; width: 35px;}
		.IN001 table,td,th{border:1px solid black;}
		.IN001 table{margin:1px;}
		.IN001 button{background: orange;}
		
		.cart table,td,th{border:1px solid white;}
		.btn1{
         transform: translate(-50%, -50%);
         -ms-transform: translate(-50%, -50%);
         background-color: #555;
         color: white;
         font-size: 16px;
         padding: 10px 20px;
         border: none;
         cursor: pointer;
         border-radius: 5px;
		 text-align: center;
		 text-decoration:none;
	 }
	 .log {
        position: absolute;
        top: 25%;
        left: 75%;
        height:50px;
        width:40%;
 
    }
      .dropdown{
        position: absolute;
        top: 36%;
        left: 91%;
        height:2%;
        width:2%;
        margin-top:0;
      
    } 

    .dropbtn {
    background-color: yellow;
    color:Black;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
     //background: url(/images/drop.png) no-repeat;
     background-size:20px;
     cursor:pointer;
        border: none;
            
    /*position: absolute;
    top: 50%;
    left: 75%;
    height:50px;
    width:40%;*/
}

.dropbtn:hover, .dropbtn:focus {
    background-color: none;
    background-size:20px;

}

/*.dropdown {
    position: relative;
    display: inline-block;
}*/

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
	</style>
	</head>

     



<!--<br><br><br><br>
<div class="menu1">
<a href="chefDetails.php">Chefs' Details</a>    
<a href="CusDetails.php">Customers' Details</a>
<a href="managerDetails.php">Managers' Details</a> 
<a href="deliveryPerDetail.php">Delivery Persons' Details</a> 
</div>--> 
	
	<body>
<br><br><br><br>
<?php require 'addmenu.php';?>
	
		<h2 style =" position:absolute; top: 488px; left: 890px;color:white;"align="center">Edit Menu</h2>

		<?php
			require'configuaration.php';
			?>
			<div>
		<form action="search.php" method="POST">
		<input Id="search" type="text" placeholder="    Search..." name="search">
		<button style="background:#333; position: absolute; right:15px; top:351px; width:80px; height:44px; border:white solid 1px;" type ="submit" name = "submit-search">search</button>
	
		</form>
		<a id="btn1"   href ="uplod.php">Add New</a>
		
		
		</div>
		<?php
			global $conn1;
			$sql="SELECT * FROM `menu_items`";
		
			$result=mysqli_query($conn1,$sql)
		?>
		 <div style = "position:absolute; top:530px; left:610px;"border='1'>
		<div class = "table">
			<table>
			<tr>
				<th>Product Id</th>
				<th>Product Name</th>
				<th>Regular</th>
				<th>Large</th>
				<th>Type</th>
				<th>Product Image</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>	
				
			<?php
				while($row =$result->fetch_assoc()){
				?>
				<tr>
					
					<td><?php echo $row['menu_id']?></td>
					<td><?php echo $row['menu_name']?></td>
					<td><?php echo $row['regular_Price']?></td>
					<td><?php echo $row['large_Price']?></td>
					<td><?php echo $row['type']?></td>
					<td><div><img src="<?php echo $row['image']?>" alt="Italian Trulli" height="100px" width="150px"></div></td>
					<td><a href="uploadmenu.php?id=<?php echo $row['menu_id'];?>">edit</a>
					</td>
					<td><a href="delete.php?id=<?php echo $row['menu_id'];?>">delete</a>
					</td>
					
				</tr>
				</div>
				<?php
					}
					mysqli_close($conn1);
					?>
	
	
	
			</table>
		</div>

	</body>
<script>
// After login
                //Dropdown------------------------
                
                function myFunction() {
                    document.getElementById("myDropdown").classList.toggle("show");
                }
                window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {

                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                    }
                }
                }
                //  End this part 

  </script>

</html>

</html>