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

</style>

<?php 
require 'configLo.php';
require ("session.php");
?>


 <?php if(!isset($_SESSION['user_id'])){?>
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
<?php }
else{ ?>
<!-- After login-->
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
<?php }?>
<script>  
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