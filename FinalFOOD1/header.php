<?php

require 'configLo.php';
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

?>

<html>

<head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type ="text/css" href="css/slideShowP.css">  
        <link rel="stylesheet" type ="text/css" href="css/login.css"> 
        <script src="js/login.js" type="text/javascript"></script> 
</head>
        <style>
     .dropdown{
        position: absolute;
        top: 36%;
        left: 91%;
        height:2%;
        width:2%;
        margin-top:0;
      
    } 

    .dropbtn {
 background:url("images/drop.png")no-repeat;
    color:Black;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    
     background-size:20px;
     cursor:pointer;
        border: none;
            
    position: absolute;
    top: 50%;
    left: 100px;
    height:50px;
    width:40%;
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
.show {display: block;}
.dropdown a:hover {background-color: #ddd;}

    .menu1{
        padding:2px;
        position: absolute;
        margin: 8px;
        background:#333;
        overflow: hidden;
        width: 98%;
    } 

    .menu1 a{
        display:inline-block;
        text-decoration: none;
        font-size: 20px;
        padding: 16px 16px;
        color: white;
        border-radius:5px;
    }       
    
    .menu1 a:hover{
        background:orangered;
        color: white;
    }
	
    #mySidenav a{
        position: absolute;
        left:-25px;
        transition: 0.3s;
        padding: 15px;
        width:120px;
        text-decoration:none;
        text-align: right;
        font-size:20px;
        color:white;
        border-radius:0 5px 5px 0; 
    }
    #mySidenav a:hover{
        left:13px;
        width: 10%;
    }
    
    #tradi{
        top:45px;
        background-color: #4CAF50;
    }

    #indian{
        top:105px;
        background-color:#2196f3;
    }

    #italian{
        top:165px;
        background-color: #f44336;
    }

    #thai{
        top:225px;
        background-color: #555;
    }    

    legend{
        font-style:normal;
        font-size:2.5em;
        color:black;
    }

    .foot{
    text-align:center;
    padding:20px;
    background:url("images/thai.jpg")no-repeat;
    opacity: 0.8;
    background-size: 100%;
    color:black;
    position:absolute;
    top: 1100px;
    width:95.5%;
    margin: 5px;
    }

    .footlogo{
    position:absolute;
    bottom:30px;
    left:15px;
    }

    .footlogo img{
    width: 50px;
    height:50px;
    }

    .foot a{
    color:yellow;
    font-weight: 900;
    padding:8px 8px;
    }
	
	        .but{
        background:orange;
        padding: 5px;
        border:none;
        }

        .fad{
        background:orange;
        font-family:Franklin Gothic Medium;
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
        
    	.modal1 {
		display: none; 
		position: fixed; 
		z-index: 1; 
		padding: 70px; 
		left: 0;
		top: 0;
		width: 82%; 
		padding-left:100px;
		height: 70%; 
		overflow:auto; 
		background-color: rgb(0,0,0);
		background-color: rgba(0,0,0,0.0);	
		}

		.modal-content {
		background-color: #fefefe;
		margin: auto;
		padding: 20px;
		border: none;
		width:40%;
        height: 92%;
		background-image: url("images/orange.jpg");			
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
    
		</style>
</head>

<header>
        <img src="images/head.jpg" style="width:99.5%;margin: 7px;opacity: 0.8;">

        <div class="menu1">
                <a href="slideShowP1.php">HOME</a>
                <a href="homePromotions.php">PROMOS</a>
             
                <a href="feedBack .php">CONTACT US</a>
                <a href="contact.php">ABOUT US</a>
        </div>

        <form action = "searchfood.php" method = "POST">
		<input style="background:#333; position: absolute; right:110px; top:351px; width:450px; height:44px; border:white solid 1px; color:white;" type="text" name="searchfood" placeholder="   Search..">
		<button style="background:#333; position: absolute; right:15px; top:342px; width:80px; height:44px; border:white solid 1px;" type ="submit" name = "submit-search">search</button>
		</form>
        <div id ="mySidenav" class="sidenav">
            <a href="indian.php" id="tradi">Traditional</a>
            <a href="indian.php" id="indian">Indian</a>
            <a href="indian.php" id="italian">Italian</a>
            <a href="indian.php" id="thai">Thai</a>
			
        </div>
        <?php 
        if(!isset($_SESSION['user_id'])){
            
        ?>
        <button class ="btn1" style = "padding: 10px; width:80px; position:absolute; top:35%; left:95%;"class = "pop" class = "pop" id="login" onclick="f4();"> Login </button>
    <div id="pop4" class="modal">
            
	<div style = "background:url(images/login.png);background-size:auto; margin: auto; padding: 15px;border: none;width:38%;height: 70%;">        
                
            
    <div>
	<fieldset>
	<h2 style = "text-align:center;">Login</h2>
            <div style = "width:20%;">
			<form action="loginVali.php" id="form1" method="Post">
	<!--<legend><b>Login</b></legend>-->
<pre>
    <h3 style="text-align:center;"><b>Email:</b></h3> <input type="email" name="email" spaceholder=" Enter email" required "style="width:300px;">
    <h3 style="text-align:center;"><b>Password:</b></h3> <input type="password" name="password" spaceholder="Enter password" required "style="width:300px;">
              <button style="background-color: #007965; padding: 7px 10px; color: white;"type="submit" align="right">Login</button>
<input style="background: white;width: 15;height: 15px;" type="checkbox" name="remember">   Remember me
</pre>    

<pre>
			<span class="psw">Forgot <a class="link" href="#">password?</a></span>   <span class="signup">Do not have an account?<a class="link" href="regP.php">signup here</a></span>
</pre>
</fieldset>         
			
	</div>
	</div>
	</div>
<?php 

}else{ 
    
?>
<!-- After login-->
<div style="position:absolute;left:1100px;top:230px;">
        <?php 

        if(isset($_SESSION['userName']) && isset($_SESSION['user_id']) ){
            
            
            // echo "<h2>Your User ID: ".$userID."</h2>";
            // echo "<h2>You are logged in as :" .$name."</h2>";
            echo "<h2>Your User ID: ".$_SESSION['user_id']."</h2>";
            echo "<h2>You are logged in as : ".$_SESSION['userName']."</h2>";
        }else{

            echo "rrrrrrrrrrrrrrrr";
        }
        
    
        
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
<?php }?>
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

</header>
