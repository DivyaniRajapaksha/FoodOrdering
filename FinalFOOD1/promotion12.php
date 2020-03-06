<?php
require 'header.php';
require 'footer.php';
require 'configLo.php';
require 'loginVali.php';
 require 'addmenu.php';
require 'cart.php';
?>
<?php
   if(!isset($_SESSION)) 
   { 
	   session_start(); 
   }
    ?>

<?php
     require 'config.php';
     ?>


<?php

if(!$conn)
{
    echo "Fail to connect to MYSQL!".mysqli_connect_error();
}


   $sql = "SELECT * FROM promotion";
   $result = mysqli_query($conn,$sql);
   ?>

     <!DOCTYPE html>
     <html>
         <head>
         <style>

         body{
             background:url(images/wood.jpg);
             background-size:auto;
             
        
            }

      .tb1{
        border:2px solid black;
        width:500px;
        margin-left:150px;
        margin-top:50px;


      }
      
      .tr,td,th{
        border:2px solid black;
        padding:20px;
        color:white;
        
      }
      
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
    
    <body>
        <table class="tb1" >
            <thead>
           <tr>
  
              <th>Name</th>
              <th>Food Item</th>
              <th>Current Price</th>
              <th>Last Price</th>
              <th>Description</th>
              <th>Edit</th>
              <th>Delete</th>
</tr>
</thead>
<tbody>

   <?php
    while($row=$result->fetch_assoc()){
    ?>
     <tr>
             
                   <td><?php echo $row['name']?></td>
                   <td><div><img src="<?php echo $row['image']?>" alt="Italian Trulli" height="150px" width="250px"></div></td> 
                   <td><?php echo $row['current_price']?></td>
                   <td><?php echo $row['last_price']?></td>
                   <td><?php echo $row['description']?></td>
                   
                   <td><a href="uploadpromotions.php?id=<?php echo $row['id'];?>">edit</a></td>
                   <td><a href="deletepromotions.php?id=<?php echo $row['id'];?>">delete</a>
					</td>
</tr>

</tbody>
    
    <?php } ?>
  
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
						<td><?php echo $values["item_price"];?></td>
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

 </body>
<script>
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