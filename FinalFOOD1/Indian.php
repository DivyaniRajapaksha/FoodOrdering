<?php
require 'cart.php';
require 'header.php';
require 'footer.php';
?>

    
    <link rel= "stylesheet" type="text/css" href="css/.css">
    
	<style>
	        .but{
        background:orange;
        padding: 5px;
        border:none;
        }

        .fad{
        background:orange;
        font-family:Franklin Gothic Medium;
	    color : white;
        width: 50%;
        margin: 2px;
        padding: 2px;
        }

        .purchase{
        background:orange;
        padding: 5px;
        border: none;
        position: absolute;
		top:85%;
		left:65%;
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
			body{background-image: url("images/wood.jpg");}
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
	</style>
	</head>

	
    <body>
	<br><br><br>
				<?php 
					$query = "SELECT * FROM menu_items WHERE menu_id = '1'";
					$result = mysqli_query($connect,$query);
					if(mysqli_num_rows($result) > 0)
					{
						while($row =mysqli_fetch_array($result))
						{
				?>
				
	 <h1 style = "position:absolute;top:490px;left:327px;"><?php echo $row['menu_name'];?></h1>
	<div style = "position:absolute;top:565px;left:260px;"><img src="<?php echo $row['image']?>" alt="Italian Trulli" height="150px" width="200px"></div>
	<div>
   <button class ="btn1" style = "position:absolute; top:760px; left:24%;"class = "pop"  id="IN001" onclick="f1();"> Add to cart </button>
    <div id="pop1" class="modal">
            
            <div class="modal-content">
			<span class="close"></span>
                
                
            
    <div>
	
            <h1 class="fad"><?php echo $row['menu_name'];?></h1>
            <img src="<?php echo $row['image']?>" style="width:100%; height:30%; margin:2px;">
            <img src="<?php echo $row['image']?>" style="width:15%; height:15%; position: absolute; top:230px; left:35%; border: black thin solid; padding: 5px;">
            
            <br><br><br>
            <h1 class="fad">DESCRIPTION</h1>
            <p style="width:100% ;margin:2px;"> 
            CoffeeBreak is a processed coffee producing company satisfying the taste buds of the local customers. Since there are different types the coffee production has become a labour intensive process. The employee management system helps the firm in recording employee details, assigning employees to production lines, managing attendance of the employees and handling employee leave applications. 
            In order to record the new employees CoffeeBreak takes employee details such as name, national identity card number, date of birth, address and contact number. Upon registration an employee is given an employee number and employee will be entered to the employee register. 
            </p>

		<h3 align = "center"> Price List </h3><br>		
		<div>
		<div class = "IN001">
		<form method = "post" action="cart.php?action=add&id=<?php echo $row["menu_id"];?>">
		<table>
			<tr>
				<th>Food Name</th>
				<th>Item No</th>
				<th>Reg</th>
				<th>Large</th>
			</tr>
			
			<tr style = "text-align:center;">
				<td><?php echo $row['menu_name']?></td>
				<td><?php echo $row['menu_id']?></td>
				<td>Rs.<?php echo $row['regular_Price'];?></td> 
				<td>Rs.<?php echo $row['large_Price'];?></td> 
			</tr>
		</table>
		
				Quantity:<input type ="text" name ="quantity" value = "1">
				<input type = "hidden" name = "hidden_id" value ="<?php echo $row['menu_id'];?>">
				<input type = "hidden" name = "hidden_name" value ="<?php echo $row['menu_name'];?>">
				<input type ="radio"  name = "hidden_price" value= "<?php echo $row['regular_Price'];?>" checked> Regular </button>
				<input type ="radio" name = "hidden_price" value= "<?php echo $row['large_Price'];?>" checked> Large</button>			
				
		</div>
		<button class="purchase" name = "submitform" type ="submit">Purchase</button>
		</div>
		</form>
		</div> 
		<br>
		<div style="position: absolute;top:87%;left:35%;">
				<form action = "indian.php" method = "POST">
				<input type ="hidden" name ="name"><br>
				comment:<br><textarea style = "background-color:#14ECFF;" row = "2" cols = "60" name = "comment"></textarea>
				<input style="position: absolute; top:42%; left:465px; padding:8px; background-color:#14ECFF; border-radius:3px; border:none;" type = "submit" value = "post" name="post">	
				</form>
		</div>
				<?php
						}
					}
				?>
    </div>
	</div>
	</div>
	
<!--button 2 -->
						<?php 
					$query = "SELECT * FROM menu_items WHERE menu_id = '2'";
					$result = mysqli_query($connect,$query);
					if(mysqli_num_rows($result) > 0)
					{
						while($row =mysqli_fetch_array($result))
						{
				?>
				
	 <h1 style = "position:absolute;top:490px;left:715px;"><?php echo $row['menu_name'];?></h1>
	<div style = "position:absolute;top:565px;left:660px;"><img src="<?php echo $row['image']?>" alt="Italian Trulli" height="150px" width="200px"></div>
	<div>
   <button class ="btn1" style = "position:absolute; top:760px; left:50%;"class = "pop"  id="IN002" onclick="f2();"> Add to cart </button>
    <div id="pop2" class="modal">
            
            <div class="modal-content">
			<span class="close"></span>
                
                
            
    <div>
            <h1 class="fad"><?php echo $row['menu_name'];?></h1>
            <img src="<?php echo $row['image']?>" style="width:100%; height:30%; margin:2px;">
            <img src="<?php echo $row['image']?>" style="width:15%; height:15%; position: absolute; top:230px; left:35%; border: black thin solid; padding: 5px;">
            
            <br><br><br>
            <h1 class="fad">DESCRIPTION</h1>
            <p style="width:100% ;margin:2px;"> 
            CoffeeBreak is a processed coffee producing company satisfying the taste buds of the local customers. Since there are different types the coffee production has become a labour intensive process. The employee management system helps the firm in recording employee details, assigning employees to production lines, managing attendance of the employees and handling employee leave applications. 
            In order to record the new employees CoffeeBreak takes employee details such as name, national identity card number, date of birth, address and contact number. Upon registration an employee is given an employee number and employee will be entered to the employee register. 
            </p>

		<h3 align = "center"> Price List </h3><br>		
		<div>
		<div class = "IN001">
		<form method = "post" action="cart.php?action=add&id=<?php echo $row["menu_id"];?>">
		<table>
			<tr>
				<th>Food Name</th>
				<th>Item No</th>
				<th>Reg</th>
				<th>Large</th>
			</tr>
			
			<tr style = "text-align:center;">
				<td><?php echo $row['menu_name']?></td>
				<td><?php echo $row['menu_id']?></td>
				<td>Rs.<?php echo $row['regular_Price'];?></td> 
				<td>Rs.<?php echo $row['large_Price'];?></td> 
			</tr>
		</table>
		
				Quantity:<input type ="text" name ="quantity" value = "1">
				<input type = "hidden" name = "hidden_id" value ="<?php echo $row['menu_id'];?>">
				<input type = "hidden" name = "hidden_name" value ="<?php echo $row['menu_name'];?>">
				<input type ="radio"  name = "hidden_price" value= "<?php echo $row['regular_Price'];?>" checked> Regular </button>
				<input type ="radio" name = "hidden_price" value= "<?php echo $row['large_Price'];?>" checked> Large</button>			
			
		</div>
		<button class="purchase" name = "submitform" type ="submit">Purchase</button>
		</div>
		</form>
		</div> 
		<br>
		<div style="position: absolute;top:87%;left:35%;">
				<form action = "indian.php" method = "POST">
				<input type ="hidden" name ="name"><br>
				comment:<br><textarea style = "background-color:#14ECFF;" row = "2" cols = "60" name = "comment"></textarea>
				<input style="position: absolute; top:42%; left:465px; padding:8px; background-color:#14ECFF; border-radius:3px; border:none;" type = "submit" value = "post" name="post">	
				</form>
		</div>
				<?php
						}
					}
				?>
    </div>
	</div>
	</div>
	
	
	
	
	
	
	<!--button 3 -->
						<?php 
					$query = "SELECT * FROM menu_items WHERE menu_id = '3'";
					$result = mysqli_query($connect,$query);
					if(mysqli_num_rows($result) > 0)
					{
						while($row =mysqli_fetch_array($result))
						{
				?>
				
	 <h1 style = "position:absolute;top:490px;left:1095px;"><?php echo $row['menu_name'];?></h1>
	<div style = "position:absolute;top:565px;left:1065px;"><img src="<?php echo $row['image']?>" alt="Italian Trulli" height="150px" width="200px"></div>
	<div>
   <button class ="btn1" style = "position:absolute; top:760px; left:77%;"class = "pop"  id="IN003" onclick="f3();"> Add to cart </button>
    <div id="pop3" class="modal">
            
            <div class="modal-content">
			<span class="close"></span>
                
                
            
    <div>
            <h1 class="fad"><?php echo $row['menu_name'];?></h1>
            <img src="<?php echo $row['image']?>" style="width:100%; height:30%; margin:2px;">
            <img src="<?php echo $row['image']?>" style="width:15%; height:15%; position: absolute; top:230px; left:35%; border: black thin solid; padding: 5px;">
            
            <br><br><br>
            <h1 class="fad">DESCRIPTION</h1>
            <p style="width:100% ;margin:2px;"> 
            CoffeeBreak is a processed coffee producing company satisfying the taste buds of the local customers. Since there are different types the coffee production has become a labour intensive process. The employee management system helps the firm in recording employee details, assigning employees to production lines, managing attendance of the employees and handling employee leave applications. 
            In order to record the new employees CoffeeBreak takes employee details such as name, national identity card number, date of birth, address and contact number. Upon registration an employee is given an employee number and employee will be entered to the employee register. 
            </p>

		<h3 align = "center"> Price List </h3><br>		
		<div>
		<div class = "IN001">
		<form method = "post" action="cart.php?action=add&id=<?php echo $row["menu_id"];?>">
		<table>
			<tr>
				<th>Food Name</th>
				<th>Item No</th>
				<th>Reg</th>
				<th>Large</th>
			</tr>
			
			<tr style = "text-align:center;">
				<td><?php echo $row['menu_name']?></td>
				<td><?php echo $row['menu_id']?></td>
				<td>Rs.<?php echo $row['regular_Price'];?></td> 
				<td>Rs.<?php echo $row['large_Price'];?></td> 
			</tr>
		</table>
		
				Quantity:<input type ="text" name ="quantity" value = "1">
				<input type = "hidden" name = "hidden_id" value ="<?php echo $row['menu_id'];?>">
				<input type = "hidden" name = "hidden_name" value ="<?php echo $row['menu_name'];?>">
				<input type ="radio"  name = "hidden_price" value= "<?php echo $row['regular_Price'];?>" checked> Regular </button>
				<input type ="radio" name = "hidden_price" value= "<?php echo $row['large_Price'];?>" checked> Large</button>			
			
		</div>
		<button class="purchase" name = "submitform" type ="submit">Purchase</button>
		</div>
		</form>
		</div> 
		<br>
		<div style="position: absolute;top:87%;left:35%;">
				<form action = "indian.php" method = "POST">
				<input type ="hidden" name ="name"><br>
				comment:<br><textarea style = "background-color:#14ECFF;" row = "2" cols = "60" name = "comment"></textarea>
				<input style="position: absolute; top:42%; left:465px; padding:8px; background-color:#14ECFF; border-radius:3px; border:none;" type = "submit" value = "post" name="post">	
				</form>
		</div>
				<?php
						}
					}
				?>
    </div>
	</div>
	</div>
	
	
	
	
	
	
	<!--<button class ="btn1" style = "padding: 10px; width:80px; position:absolute; top:35%; left:95%;"class = "pop" class = "pop" id="login" onclick="f4();"> Login </button>
    <div id="pop4" class="modal">
            
	<div style = "background:url(images/login.png);background-size:auto; margin: auto; padding: 20px;border: none;width:25%;height: 44%;">
                
                
            
    <div>
	<fieldset>
	<h2 style = "text-align:center;">Login</h2>
            <div style = "width:20%;">
			<h3 style = "text-align:center;"> Username:</h3> <input style =  "width:300px;" type = "text" name = "username"> 
			
			<h3 style = "text-align:center;">Password:</h3> <input style = "width:300px;" type = "text" name = "password">
			<br><br>
			<button style = "background-color: #007965; padding:7px 10px; color:white;"type="submit" align="right">Login</button>
			</div>
	</fieldset>		
	</div>
	</div>
	</div>-->
	
	
	<button class ="btn1"  style = "padding: 10px; width:80px; position:absolute; top:28%; left:95%;"class = "pop" class = "pop" id="cart" onclick="f5();"> Cart </button>
    <div id="pop5" class="modal">
            
    <div style = "background:url(images/login.png); background-size:auto; margin: auto; padding: 20px;border: none;width:29%;height: 49%;">
                        
    <div>
            <fieldset>
                   <h2 style = "text-align:center;">Cart</h2>
        
				<div class = "cart">
								<table>
					<tr>
						<th>Item no</th>
						<th>Item name</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Total</th>
						<th>Action</th>
					</tr>
					<?php 
						if(!empty($_SESSION["shopping_cart"]))
						{
							$total = 0;
							foreach($_SESSION["shopping_cart"] as $keys => $values)
							{
					?>
					<tr>
						<td><?php echo $values["item_no"];?></td>
						<td><?php echo $values["item_name"];?></td>
						<td><?php echo $values["item_quantity"];?></td>
						<td>$<?php echo $values["item_price"];?></td>
						<td><?php echo number_format($values["item_price"] * $values["item_quantity"],2);?></td>
						<td><a href = "cart.php?action=delete&id=<?php echo $values["item_id"];?>"><span>Remove</span></a></td>
					</tr>
					<?php 
						$total = $total + ($values["item_quantity"] *$values ["item_price"]);
						}
						?>
						<tr>
							<td colspan ="4" align = "right"> Total</td>
							<td align ="right">$<?php echo number_format($total,2);?></td>
						</tr>
						<?php
						
						}
						?>
					
				</table>
				
				</div>
	
            </fieldset>
	</div>
	</div>
	</div>
	
	
	<?php $connect = mysqli_connect("localhost","root","","food_ordering_system");
	if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
    } 
	?>
	
<?php
		if(isset($_POST["post"])){
			$name=$_POST['name'];
			$comment=$_POST['comment'];

			$sql = "INSERT INTO food_comment(com_id,name,comment)
			VALUES (NULL, '$name', '$comment')";
			
			if(mysqli_query($connect,$sql)){
					echo"Updated Successfully";
					//header("Location:indian.php");
				}
				else{
					echo"error uploading";
				}
		}
		
?>
<br><br>
<div style ="position:absolute; top:900px;margin-left:240px;">
<?php 
					$last_id = $connect->insert_id;
					$query = "SELECT * FROM food_comment where com_id ='$last_id'";
					$result = mysqli_query($connect,$query);
					if(mysqli_num_rows($result) > 0)
					{
						while($row =mysqli_fetch_array($result))
						{
							?>
						
							<textarea row = "2" cols = "139" name = "comment"><?php echo $row['comment'];?></textarea><br><br>
							<a style = "text-decoration:none; padding:5px; background-color:red; float:right; margin:2px; border-radius:3px;" href="editcomment.php?id=<?php echo $row['com_id'];?>">Edit</a>
							<a style = "text-decoration:none; padding:5px; background-color:red; float:right;margin:2px; border-radius:3px;" href = "deletecomment.php?id=<<?php echo $row['com_id'];?>">delete</a>
						<?php	
						}
					}
?>
	
	

	<script >
	
		function f1(){
           var modal=document.getElementById('pop1');
           var btn1=document.getElementById("IN001");
           var span = document.getElementsByClassName("close")[0];
        
            btn1.onclick =function(){
                modal.style.display="block";
            }
            span.onclick = function() {
            modal.style.display = "none";
			}
            window.onclick=function(event){
                if(event.target == modal) {
                    modal.style.display="none";
                }
            }
		}
		
		function f2(){
           var modal=document.getElementById('pop2');
           var btn1=document.getElementById("IN002");
           var span = document.getElementsByClassName("close")[0];
        
            btn1.onclick =function(){
                modal.style.display="block";
            }
            span.onclick = function() {
            modal.style.display = "none";
			}
            window.onclick=function(event){
                if(event.target == modal) {
                    modal.style.display="none";
                }
            }
		}
		
		function f3(){
           var modal=document.getElementById('pop3');
           var btn1=document.getElementById("IN003");
           var span = document.getElementsByClassName("close")[0];
        
            btn1.onclick =function(){
                modal.style.display="block";
            }
            span.onclick = function() {
            modal.style.display = "none";
			}
            window.onclick=function(event){
                if(event.target == modal) {
                    modal.style.display="none";
                }
            }
		}
		
		function f4(){
           var modal=document.getElementById('pop4');
           var btn1=document.getElementById("login");
           var span = document.getElementsByClassName("close")[0];
        
            btn1.onclick =function(){
                modal.style.display="block";
            }
            span.onclick = function() {
            modal.style.display = "none";
			}
            window.onclick=function(event){
                if(event.target == modal) {
                    modal.style.display="none";
                }
            }
		}
		
		   function f5(){
           var modal=document.getElementById('pop5');
           var btn1=document.getElementById("cart");
           var span = document.getElementsByClassName("close")[0];
        
            btn1.onclick =function(){
                modal.style.display="block";
            }
            span.onclick = function() {
            modal.style.display = "none";
			}
            window.onclick=function(event){
                if(event.target == modal) {
                    modal.style.display="none";
                }
            }
		}
	</script>
