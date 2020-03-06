
<?php 
require 'configLo.php';

//session_start();
require 'header.php';
require 'footer.php';
require 'cart.php';
?>

<html>

<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type ="text/css" href="css/slideShowP.css">  
        <link rel="stylesheet" type ="text/css" href="css/login.css"> 
        <script src="js/login.js" type="text/javascript"></script> 

		<style>
		body{width:100%;}
		    .foot{
    text-align:center;
    padding:20px;
    background:url("images/thai.jpg")no-repeat;
    opacity: 0.8;
    background-size: 100%;
    color:black;
    position:absolute;
    top: 1490px;
    width:95.5%;
    margin: 5px;
    }
	
		</style>
		</head>

<!-- <header> -->
        
        <!--<img src="images/head.jpg" style="width:99.5%;margin: 7px;opacity: 0.8;">
        
        <!-- Menue 
            
        
        <div class="menu1">
                <a href="slideShowP.html">HOME</a>
                <a href="">PROMOS</a>
                <a href="">FEEDBACK</a>
                <a href="contact.html">ABOUT US</a>
                <a href="feedback.html">CONTACT US</a>
        </div>

        <form class="search">
                <input type="text" name="search" placeholder="Search..">
        </form>


        <div id ="mySidenav" class="sidenav">
                <a href="tradit.html" id="tradi">Traditional</a>
                <a href="thai.html" id="indian">Indian</a>
                <a href="Itlian.html" id="italian">Italian</a>
                <a href="thai.html" id="thai">Thai</a>
        </div>-->
        <!--//
        <button id="btn"  onclick="document.getElementById('mymdl').style.display='block'" style="width:auto;">Login</button>

<div id="mymdl" class="modal">
<div class="modal-content">
                    
                    <span class="close">&times;</span>
                
<form action="loginVali.php" id="form1" method="Post">
<fieldset>
<legend><b>Login</b></legend>
<img src="images/logoin.png" alt="loginlogo" class="persona" align="left" >
<pre>
    <b>Email:</b> <input type="email" name="email" spaceholder=" Enter email" required ">
    <b>Password:</b> <input type="password" name="password" spaceholder="Enter password" required " >
              <button type="submit" align="right">Login</button>
                    <input style="background: white;width: 15;height: 15px;" type="checkbox" name="remember">   Remember me
</pre>    
                <span class="psw">Forgot <a class="link" href="#">password?</a></span>
                <span class="signup">Do not have an account?<a class="link" href="regP.php">signup here</a></span>
</fieldset>         
</form>
</div>
</div>
<?php 
// }
/*else{ ?>
 After login-->
<div class="log">
        <?php 
        echo "<h2>Your User ID: ".$userID."</h2>";
        echo "<h2>You are logged in as :" .$name."</h2>";
         ?>
        </div>
        
        <div class="dropdown">
            <button onclick="myFunction()"  class="dropbtn">V</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="account.php">My Account</a>
                <a href="logout.php">Logout</a>
        
            </div>
        </div>
        <!-- End this part -->
<?php }*/?>

</header>
<!-- After login CSS -->
<style>
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
//--------------------------------------------------------------------------
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
</style>
<!-- End this part -->
        
<body><br><br><br>
                <div class="pics" style="margin:25px;">
                    <img class="pics1" src="images/10.jpg" style="width:100%;">
                    <img class="pics1" src="images/11.jpg" style="width:100%;">
                    <img class="pics1" src="images/12.jpg" style="width:100%;">
                    <img class="pics1" src="images/13.jpg" style="width:100%;"> 
                    <img class="pics1" src="images/14.jpg" style="width:100%;">
                </div>
       

        <h1 style="font-size:35px;">Today's Special</h1>
<div style="margin:5px;">
<div style="position: absolute; top: 860px;left:280px; margin: 15px;">
        <h1 style="background:orangered; padding-right:300px; ">Taco</h1>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        
        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
        <pre><p style="float:right;font-size:30px;color:rgb(224, 7, 7);margin-top:0px;"><b><del>Rs.500.00</del>   Rs.350.00</b></p></pre>

<br/><br/><hr>
<br/><br/>
</div>
        <img src="images/thai.jpg" style="width:250px;height: 150px"></div>
        <br><br>
        <div style="margin:5px;">
                <div style="position: absolute; top: 1056px;left:280px; margin: 15px;">
                        <h1 style="background:orangered; padding-right:300px; ">Taco</h1>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                        
                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <pre><p style="float:right;font-size:30px;color:rgb(224, 7, 7);margin-top:0px;"><b><del>Rs.500.00</del>   Rs.350.00</b></p></pre>
                
                <br/><br/><hr>
                <br/><br/>
                </div>
                        <img src="images/thai.jpg" style="width:250px;height: 150px"></div>
                        <br><br>
                        <div style="margin:5px;">
                                <div style="position: absolute; top: 1255px;left:280px; margin: 15px;">
                                        <h1 style="background:orangered; padding-right:300px; ">Taco</h1>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                        
                                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                        <pre><p style="float:right;font-size:30px;color:rgb(224, 7, 7);margin-top:0px;"><b><del>Rs.500.00</del>   Rs.350.00</b></p></pre>
                                
                                <br/><br/><hr>
                                <br/><br/>
                                </div>
                                        <img src="images/thai.jpg" style="width:250px;height: 150px"></div>
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

        <script>
                var slide = 0;
                slideshow();
            
                function slideshow() {
                    var a;
                    var y = document.getElementsByClassName("pics1");
                    for (a = 0; a < y.length; a++) {
                   y[a].style.display = "none";  
                    }
                    slide++;
                    if (slide > y.length) {slide = 1}    
                    y[slide-1].style.display = "block";  
                    setTimeout(slideshow, 5000); 
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
				//--------
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

        <br><br>
        
        </body>
        
       <!-- <footer>
                <div class="foot">
                    <a href="">HOME</a>
                    <a href="">ABOUT US</a>
                    <a href="">FEEDBACK</a>
                    <a href="">CONTACT US</a>
                    <h3>Copyright Company 2013;All Right Reserved.</h3>
                <div>
                
                <div class="footlogo"> 
                    <a href="https://www.facebook.com/"> <img src="images/facebook.png" alt=""/></a>
                    <a href="https://about.twitter.com/en_us.html"> <img src="images/twitter.png"  alt=""/></a>
                    <a href="https://www.instagram.com/?hl=en"> <img src="images/Instagram.png" alt=""/></a>
                    <a href="https://www.google.com/"> <img src="images/google.png" alt=""/></a> 
                    
                </div>
        </footer>-->

</html>