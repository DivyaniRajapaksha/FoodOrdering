<?php
require 'configLo.php';
//require ("session.php");
?>

<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 

 
    $cusId = $_SESSION['user_id'];
}
    //echo $cusId;
    if(!$conn)
    {
        echo "Fail to connect MYSQL!".mysqli_connect_error();
    }
    else
    {
    $sql="SELECT* FROM user WHERE Id='$cusId'";

    //echo $sql;
    $result=mysqli_query($conn,$sql);
    ?>
    <!-- <script>console.jjjjj</script> -->
    <?php
    }
    $row = $result->fetch_assoc();
    $a=$row['first_name']; ?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type ="text/css" href="css/common.css">
    </head>
    <header>
                <img src="images/head.jpg" style="width:99.3%;margin: 7px; opacity: 0.8;">

                <div class="menu1">
                <a href="slideShowP1.php">HOME</a>
                <a href="promotion12.php">PROMOS</a>
             
                <a href="feedBack .php">CONTACT US</a>
                <a href="contact.php">ABOUT US</a>
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
        </header>
        <style>
           .acc{
               font-style:normal;
                font-size:1.5em;
           }
           #but {
    background-color: #333;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-style:normal;
                font-size:0.8em;
}


#but:hover, #but:active {
    background-color: orangered;
}
        </style>
    <body><br><br><br>

    <footer>
                <div class="foot">
                    <a href="">HOME</a>
                    <a href="">ABOUT US</a>
                    <a href="">FEEDBACK</a>
                    <a href="">CONTACT US</a>
                    <h3>Copyright Company 2013;All Right Reserved.</h3>
                <div>
                
                <!-- <div class="footlogo"> 
                    <a href="https://www.facebook.com/"> <img src="images/facebook.png" alt=""/></a>
                    <a href="https://about.twitter.com/en_us.html"> <img src="images/twitter.png"  alt=""/></a>
                    <a href="https://www.instagram.com/?hl=en"> <img src="images/Instagram.png" alt=""/></a>
                    <a href="https://www.google.com/"> <img src="images/google.png" alt=""/></a> 
                </div> -->
        </footer>
</html>
<br><br><br>

<fieldset>
<h1 align="center">My Account</h1>
<div class="acc" align="center" >
<pre>
    <?php

    echo "First Name:"     .$row['first_name']; 
    echo nl2br("\n",false);
    echo "Last Name:"       .$row['last_name'];
    echo nl2br("\n",false);
    echo "Email:"               .$row['email'];
    echo nl2br("\n",false);
    echo "Contact Number:" .$row['contact_no'];
    echo nl2br("\n",false);
    echo "No:"                  .$row['add_1'];
    echo nl2br("\n",false);
    echo "Street:"              .$row['add_2'];
    echo nl2br("\n",false);
    echo "City:"                 .$row['city'];
    echo nl2br("\n",false);
    echo "Post Code:"       .$row['post_code'];
    echo nl2br("\n",false);
    ?>
    </pre>
    <a href = "EditAccount.php"><button id="but" type="button">Edit My Account</button></a>
</div>
</fieldset>