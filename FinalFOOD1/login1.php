 <button class ="btn1" style = "padding: 10px; width:80px; position:absolute; top:35%; left:95%;"class = "pop" class = "pop" id="login" onclick="f4();"> Login </button>
    <div id="pop4" class="modal">
            
    <div style = "background:url(images/login.png);background-size:auto; margin: auto; padding: 20px;border: none;width:25%;height: 44%;">
                
 <div>
	<fieldset>
	<h2 style = "text-align:center; color:white">Login</h2>
            <div style = "width:20%;">
			<h3 style = "text-align:center; color:white;"> Username:</h3> <input style =  "width:300px;" type = "text" name = "username"> 
			
			<h3 style = "text-align:center; color:white;">Password:</h3> <input style = "width:300px;" type = "text" name = "password">
			<br><br>
			<button style = "background-color: #007965; padding:7px 10px; color:white;"type="submit" align="right">Login</button>
			</div>
	</fieldset>		
	</div>
	</div>
	</div>
	
	
	<button class ="btn1" style = "padding: 10px; width:80px; position:absolute; top:28%; left:95%;"class = "pop" class = "pop" id="cart" onclick="f5();"> Cart </button>
    <div id="pop5" class="modal">
            
    <div style = "background:url(images/login.png); background-size:auto; margin: auto; padding: 20px;border: none;width:29%;height: 49%;">
                        
    <div>
            <fieldset>
                   <h2 style = "text-align:center; color:white">Cart</h2>
        
				
					<table style ="color:white;">
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
				
				
				
				
				
                <br>
                <button style = "background-color: #007965; padding:6px 10px;">
                    <a style="text-decoration: none; color:white;" href="login.html">Checkout</button>
            </fieldset>
	</div>
	</div>
	</div>
	
	<script>
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
</head>
