<html>

<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type ="text/css" href="css/login.css">   
</head>

<header>
        <img src="images/head.jpg" style="width:99.5%;margin: 7px;opacity: 0.8;">

        <div class="menu1">
                <a href="">HOME</a>
                <a href="">PROMOS</a>
                <a href="">FEEDBACK</a>
                <a href="contact.html">ABOUT US</a>
                <a href="feedback.html">CONTACT US</a>
        </div>

        <form class="search">
                <input type="text" name="search" placeholder="Search..">
        </form>


        <div id ="mySidenav" class="sidenav">
                <a href="" id="tradi">Traditional</a>
                <a href="" id="indian">Indian</a>
                <a href="" id="italian">Italian</a>
                <a href="" id="thai">Thai</a>
        </div>

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

<button id="btn1"  onclick="cartfunction();">cart</button>

<div id="cartpop" class="modal">
<div class="modal-content">
                    
                    <span class="close1">&times;</span>
                
                    <fieldset> 
                        <!-- <img src="images/indii.jpg" style="width:40%; height:40%;"> -->
                        
                    
                    
                        <table style="width:100%">
                            <tr>
                                <th>Image</th> 
                                <th>Item No</th>
                                <th>Quantity</th>
                                <th>Rs.</th>
                            </tr>
                    
                            <tr>
                                    <td><img src="images/pasta.jpg" style="width:250px; height:100px;"></td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                </tr>
                        </table><br>
                        <!-- <img src="images/lasa.jpg" style="width:40%; height:40%;"> -->
                        <table style="width:100%">
                                <tr>
                                    <th>Image</th>                
                                    <th>Item No</th>
                                    <th>Quantity</th>
                                    <th>Rs.</th>
                                </tr>
                        
                                <tr>
                                        <td><img src="images/tomato.jpg" style="width:250px; height:100px;"></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                    </tr>
                            </table><br>
                    
                            <button id = "checkout"><a style ="text-decoration: none;" href ="login.html">Checkout</button>
                    </fieldset>
                      </div>
                    
                    </div>
                    
</div>
</div>


</header>
<br><br><br><br>

<body>

                <form class="form1">
                        <fieldset>
                                <legend>Invoice</legend><br><br>
                                    <table style="width:100%;">
                                        <th><b>Item No</b></th>
                                        <th><b>Quantity</b></th>
                                        <th><b>Amount</b></th>
                                        <th class="del"><b>Remove</b></th>
                                    </table>
                                    <br/><br/>
                                    <br/><br/><br/><br/> <br/><br/> <br/><br/>
                    
                                    <table style="width:50%;" align=center>
                                        <tr>
                                            <td style="width:50%;"><b>Sub-total</b></td>
                                            <td style="width:50%;">Rs.</td>
                                        </tr>
                                    </table>
                                    <br/><br/>
                                    <table style="width:50%;" align=center>
                                        <tr>
                                             <td  style="width:50%;"><b>Discount</b></td>
                                             <td   style="width:50%;">NA</td>
                                        </tr>   
                                    </table>
                                    <br/><br/>
                                    <table style="width:50%;" align=center>
                                        <tr>
                                            <td style="width:50%;"><b>Total</b></td>
                                            <td style="width:50%;">Rs.</td>
                                                
                                        </tr>
                                    </table>
                    
                                    <br/><br/>  <br/><br/>
                                    <select class="pay">
                                        <option value="pay">Payment Method</option>
                                        <option value="credit">Credit Card</option>
                                        <option value="voucher">Voucher/Coupon</option>
                                        <option value="deliverycash">Cash on Delivery</option>
                                    </select>
                                    <br/><br/>
                                                    
                                                    <br/><br/> <br/><br/>
                                                    <button type="button" class="b12" ><b>Confirm</b></button>
                                    <br/><br/> <br/><br/> <br/><br/> <br/><br/>
                        </fieldset>
                 </form>

                 <div style="position: absolute; top:1060px;left:70px"><img src="images/card.png" class="card"style="width:290px;height:65px;"></div>

        
</body>

        <footer>
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
        </footer>
        <script src="js/login.js" type="text/javascript"></script>
        
        <script src="js/cart.js" type="text/javascript"></script>

</html>